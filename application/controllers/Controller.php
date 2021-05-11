<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ControllerModel');
	}

	public function index()
	{
		$this->load->library('session');

		$clientes = $this->ControllerModel->allClientes();
		$this->template->load('templates/template_padrao', 'index', ['clientes' => $clientes]);
	}

	public function criar()
	{
		$this->template->load('templates/template_padrao', 'novo_cliente');
	}

	public function salvar()
	{
		$this->load->library('session');

		if (!is_null($this->input->post('dt_nascimento'))) {
			$dtNasc = implode("-", array_reverse(explode("/", $this->input->post('dt_nascimento'))));
		}

		$data = array(
			'nome' => $this->input->post('nome'),
			'endereco' => $this->input->post('endereco'),
			'bairro' => $this->input->post('bairro'),
			'cidade' => $this->input->post('cidade'),
			'uf' => $this->input->post('uf'),
			'telefones' => $this->input->post('telefones'),
			'dt_nascimento' => $dtNasc,
			'dt_cadastro' => date('Y-m-d')
		);

		if ($this->ControllerModel->salvaCliente($data)) {
			$this->session->set_flashdata('success', 'Ação concluída com sucesso.');
			redirect('index.php/Controller/index');
		} else {
			$this->session->set_flashdata('error', 'Erro durante a ação.');
			http_response_code(500);
		}
	}

	public function editar()
	{
		$idcliente = $_GET['id'];
		$cliente = $this->ControllerModel->findCliente($idcliente);
		$this->template->load('templates/template_padrao', 'novo_cliente', ['cliente' => $cliente]);
	}

	public function visualizar()
	{
		$idcliente = $_GET['id'];
		$cliente = $this->ControllerModel->findCliente($idcliente);
		$this->template->load('templates/template_padrao', 'visualiza_cliente', ['cliente' => $cliente]);
	}

	public function atualizar()
	{
		$this->load->library('session');

		if (!is_null($this->input->post('dt_nascimento'))) {
			$dtNasc = implode("-", array_reverse(explode("/", $this->input->post('dt_nascimento'))));
		}

		$data = array(
			'nome' => $this->input->post('nome'),
			'endereco' => $this->input->post('endereco'),
			'bairro' => $this->input->post('bairro'),
			'cidade' => $this->input->post('cidade'),
			'uf' => $this->input->post('uf'),
			'telefones' => $this->input->post('telefones'),
			'dt_nascimento' => $dtNasc,
			'dt_cadastro' => date('Y-m-d'),
			'idcliente' => $this->input->post('idcliente')
		);

		if ($this->ControllerModel->atualizaCliente($data)) {
			$this->session->set_flashdata('success', 'Ação concluída com sucesso.');
			redirect('index.php/Controller/index');
		} else {
			$this->session->set_flashdata('error', 'Erro durante a ação.');
			http_response_code(500);
		}
	}

	public function excluir()
	{
		$this->load->library('session');

		$data = array(
			'idcliente' => $_GET['id']
		);

		if ($this->ControllerModel->excluiCliente($data)) {
			$this->session->set_flashdata('success', 'Ação concluída com sucesso.');
			redirect('index.php/Controller/index');
		} else {
			$this->session->set_flashdata('error', 'Erro durante a ação.');
			http_response_code(500);
		}
	}
}
