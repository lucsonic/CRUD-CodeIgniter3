<script>
	$(document).ready(function() {
		$('#tblDados').DataTable();
	});
</script>

<body>
	<div class='container-fluid'>
		<div style="float: left; padding-top: 15px;">
			<button type="button" class="btn btn-success" onclick="window.location = 'criar'">Novo cliente</button>
		</div>
		<div class="text-center" style="margin-top: 10px;">
			<h3>Clientes cadastrados</h3>
		</div>
		<hr>
		<div style="margin-top: 15px;">
			<table id="tblDados" class="table table-striped table-bordered table-hover" style="width: 100%">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Endereço</th>
						<th style="text-align: center;">Data Nascimento</th>
						<th>Telefones</th>
						<td style="text-align: center;">Editar</td>
						<td style="text-align: center;">Excluir</td>
						<td style="text-align: center;">Visualizar</td>
					</tr>
				</thead>
				<tbody id="dados">
					<?php
					if ($clientes) {
						foreach ($clientes as $cliente) {
					?>
							<tr>
								<td style="vertical-align: middle;">
									<?= $cliente['nome']; ?>
								</td>
								<td style="vertical-align: middle;">
									<?= $cliente['endereco'] . ', ' . $cliente['bairro'] . ' - ' . $cliente['cidade'] . '/' . $cliente['uf']; ?>
								</td>
								<td style="text-align: center; vertical-align: middle;">
									<?= date("d/m/Y", strtotime($cliente['dt_nascimento'])); ?>
								</td>
								<td style="vertical-align: middle;">
									<?= $cliente['telefones']; ?>
								</td>
								<td style="text-align: center; vertical-align: middle;">
									<span class="btn btn-sm btn-primary" Onclick="window.location = 'editar?id=<?php echo $cliente['idcliente']; ?>'">
										Editar</span>
									</span>
								</td>
								<td style="text-align: center; vertical-align: middle;">
									<span class="btn btn-sm btn-danger" Onclick="if (confirm('Deseja realmente excluir este cliente?'))window.location = 'excluir?id=<?php echo $cliente['idcliente']; ?>'">
										Excluir</span>
								</td>
								<td style="text-align: center; vertical-align: middle;">
									<span class="btn btn-sm btn-warning" Onclick="window.location = 'visualizar?id=<?php echo $cliente['idcliente']; ?>'">
										Visualizar</span>
									</span>
								</td>
							</tr>
						<?php
						}
						?>
				</tbody>
			<?php
					}
			?>
			</table>
		</div>
	</div>
</body>