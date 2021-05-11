<style>
    .padrao_titulo {
        background-color: #f2f2f2;
        color: #0a438f;
        padding-left: 15px;
        padding-top: 10px;
        padding-bottom: 10px;
        font-weight: bold;
    }
</style>
<div class="container-fluid">
    <div class="text-center" style="margin-top: 10px;">
        <h3>Dados cadastrais do cliente</h3>
    </div>
    <hr>
    <table style="border: none;">
        <tr>
            <td style="text-align: right; font-weight: bold;">Código:&nbsp;</td>
            <td><?= $cliente[0]['idcliente']; ?></td>
        </tr>
        <tr>
            <td style="text-align: right; font-weight: bold;">Nome:&nbsp;</td>
            <td><?= $cliente[0]['nome']; ?></td>
        </tr>
        <tr>
            <td style="text-align: right; font-weight: bold;">Endereço:&nbsp;</td>
            <td><?= $cliente[0]['endereco'] . ', ' . $cliente[0]['bairro'] . ' - ' . $cliente[0]['cidade'] . '/' . $cliente[0]['uf']; ?></td>
        </tr>
        <tr>
            <td style="text-align: right; font-weight: bold;">Data Nascimento:&nbsp;</td>
            <td><?= date("d/m/Y", strtotime($cliente[0]['dt_nascimento'])); ?></td>
        </tr>
        <tr>
            <td style="text-align: right; font-weight: bold;">Data Cadastro:&nbsp;</td>
            <td><?= date("d/m/Y", strtotime($cliente[0]['dt_cadastro'])); ?></td>
        </tr>
        <tr>
            <td style="text-align: right; font-weight: bold;">Telefones:&nbsp;</td>
            <td><?= $cliente[0]['telefones']; ?></td>
        </tr>
    </table>
    <hr>
    <a href="#" OnClick="window.location = 'index'" class="btn btn-warning">Voltar</a>
</div>