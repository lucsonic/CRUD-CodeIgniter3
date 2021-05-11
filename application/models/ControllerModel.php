<?php

class ControllerModel extends CI_Model
{
    private $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }

    public function allClientes()
    {
        $query = $this->db->select(['*'])
            ->from('cliente')
            ->order_by('nome')
            ->get();

        if (empty($query->result_array())) {
            return false;
        }

        return $query->result_array();
    }

    public function salvaCliente($data)
    {
        return $this->db->insert('cliente', $data);
    }

    public function atualizaCliente($data)
    {
        $this->db->where('idcliente', $data['idcliente']);
        $this->db->set($data);
        return $this->db->update('cliente', $data);
    }

    public function findCliente($id)
    {
        $query = $this->db->select(['*'])
            ->from('cliente')
            ->where('idcliente = ' . $id)
            ->get();

        if (empty($query->result_array())) {
            return false;
        }

        return $query->result_array();
    }

    public function excluiCliente($data)
    {
        $this->db->where('idcliente', $data['idcliente']);
        $this->db->set($data);
        return $this->db->delete('cliente', $data);
    }
}
