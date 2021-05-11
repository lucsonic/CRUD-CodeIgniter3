<script language='JavaScript'>
    function formatar(src, mask) {
        var i = src.value.length;
        var saida = mask.substring(0, 1);
        var texto = mask.substring(i)
        if (texto.substring(0, 1) != saida) {
            src.value += texto.substring(0, 1);
        }
    }
</script>
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
        <h3><?php echo isset($cliente) ? 'Alteração de cliente' : 'Cadastro de clientes'; ?></h3>
    </div>
    <hr>
    <form id="frmCliente" method="post" class="form-horizontal" action="<?php echo isset($cliente[0]['idcliente']) ? "atualizar" : "salvar"; ?>">
        <?php if (isset($cliente)) { ?>
            <input type="hidden" id="idcliente" name="idcliente" value="<?= $cliente[0]['idcliente']; ?>">
        <?php } ?>
        <div>
            <div class="panel panel-default">
                <div class="padrao_titulo">
                    Dados do Cliente&nbsp;&nbsp;&nbsp;
                    <span style="color:#FF0000; font-size:11px;">(Os campos que possuem (*) são de preenchimento obrigatório.)</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-1" style="text-align: right">Nome&nbsp;<font color="red">*</font></label>
                        <div class="col-md-5">
                            <input name="nome" id="nome" value="<?php
                                                                if (isset($cliente)) {
                                                                    echo isset($cliente[0]['nome']) ? $cliente[0]['nome'] : null;
                                                                }
                                                                ?>" type="text" class="form-control" placeholder="Nome do cliente" required />
                        </div>
                        <label class="col-md-1" style="text-align: right">Endereço&nbsp;<font color="red">*</font></label>
                        <div class="col-md-5">
                            <input name="endereco" id="endereco" value="<?php
                                                                        if (isset($cliente)) {
                                                                            echo isset($cliente[0]['endereco']) ? $cliente[0]['endereco'] : null;
                                                                        }
                                                                        ?>" type="text" class="form-control" placeholder="Endereço" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1" style="text-align: right">Bairro</label>
                        <div class="col-md-4">
                            <input name="bairro" id="bairro" value="<?php
                                                                    if (isset($cliente)) {
                                                                        echo isset($cliente[0]['bairro']) ? $cliente[0]['bairro'] : null;
                                                                    }
                                                                    ?>" type="text" class="form-control" placeholder="Bairro" required />
                        </div>
                        <label class="col-md-1" style="text-align: right">Cidade</label>
                        <div class="col-md-4">
                            <input name="cidade" id="cidade" value="<?php
                                                                    if (isset($cliente)) {
                                                                        echo isset($cliente[0]['cidade']) ? $cliente[0]['cidade'] : null;
                                                                    }
                                                                    ?>" type="text" class="form-control" placeholder="Cidade" required />
                        </div>
                        <label class="col-md-1" style="text-align: right">UF</label>
                        <div class="col-md-1">
                            <select class="selectpicker form-control" name="uf" id="uf" required>
                                <option value="<?php
                                                echo isset($cliente[0]['uf']) ? $cliente[0]['uf'] : null;
                                                ?>"><?php echo isset($cliente[0]['uf']) ? $cliente[0]['uf'] : null; ?></option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0px;">
                        <label class="col-md-1" style="text-align: right">Telefone</label>
                        <div class="col-md-5">
                            <input name="telefones" id="telefones" value="<?php
                                                                            if (isset($cliente)) {
                                                                                echo isset($cliente[0]['telefones']) ? $cliente[0]['telefones'] : null;
                                                                            }
                                                                            ?>" type="text" class="form-control" placeholder="Telefones" required />
                        </div>
                        <label class="col-md-2" style="text-align: right">Dt. Nascimento&nbsp;<font color="red">*</font></label>
                        <div class="col-md-2">
                            <input name="dt_nascimento" id="dt_nascimento" type="text" value="<?php echo isset($cliente[0]['dt_nascimento']) ? date("d/m/Y", strtotime($cliente[0]['dt_nascimento'])) : null; ?>" OnKeyPress="formatar(this, '##/##/####')" maxlength="10" class="form-control" placeholder="Data nascimento" required />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <input type="submit" name="enviar" class="btn btn-success" value="Salvar" />
            <a href="#" OnClick="window.location = 'index'" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>