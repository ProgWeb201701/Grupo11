
 <?php
	session_start();
	include_once('conexao.php');
 ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
	<body>
		<?php
			//Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
			$pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
			
			//Selecionar todos os itens da tabela 
			$result_dados_pessoais = "SELECT * FROM usuarios";
			$resultado_dados_pessoais = mysqli_query($conn, $result_dados_pessoais);
		
			//Contar o total de itens
			$total_dados_pessoais = mysqli_num_rows($resultado_dados_pessoais);
			
			//Seta a quantidade de itens por página
			$quantidade_pg = 20;
			
			//calcular o número de páginas 
			$num_pagina = ceil($total_dados_pessoais/$quantidade_pg);
			
			//calcular o inicio da visualizao	
			$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
			
			//Selecionar  os itens da página
			$result_dados_pessoais = "SELECT * FROM usuarios limit $inicio, $quantidade_pg";
			$resultado_dados_pessoais = mysqli_query($conn , $result_dados_pessoais);
			$total_dados_pessoais = mysqli_num_rows($resultado_dados_pessoais);
			
		?>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Lista de Usúarios</h1>
			</div>
			<div class="dropdown">
				<span class="glyphicon glyphicon-cog btn-lg text-success" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="index.php">Cadastrar</a></li>
					<li><a href="gerarPlanilhaExecel.php">Gerar Relatório Excel</a></li>
					<li><a href="#">Gerar Relatório PDF</a></li>
				</ul>
			</div>
			<div class="row espaco">
				<div class="pull-right">					
					<a href="index.php"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
					<a href="gerarPlanilhaExecel.php"><button type='button' class='btn btn-sm btn-success'>Gerar Excel</button></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th class="text-center">Id</th>
								<th class="text-center">Nome</th>
								<th class="text-center">NomeP</th>
								<th class="text-center">Celular</th>
								<th class="text-center">Email</th>
								<th class="text-center">Endereco</th>
								<th class="text-center">Enderecoc</th>
								<th class="text-center">Município</th>
								<th class="text-center">Tipo</th>
								<th class="text-center">Obs</th>
								<th class="text-center">Total</th>
								
								
							</tr>
						</thead>
						<tbody>
							<?php while($row_dados_pessoais = mysqli_fetch_assoc($resultado_dados_pessoais)){?>
								<tr>
									<td class="text-center"><?php echo $row_dados_pessoais["id"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["nome"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["nomep"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["celular"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["email"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["endereco"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["enderecoc"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["municipio"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["tipo"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["obs"]; ?></td>
									<td class="text-center"><?php echo $row_dados_pessoais["total"]; ?></td>
									            
									
									<td class="text-center">								
										<a href="#">
											<span class="glyphicon glyphicon-eye-open text-primary" aria-hidden="true"></span>
										</a>
										<a href="#">
											<span class="glyphicon glyphicon-pencil text-warning" aria-hidden="true"></span>
										</a>
										<a href="#">
											<span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
										</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			
			<?php
				//Verificar pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
			<nav class="text-center">
				<ul class="pagination">
					<li>
						<?php 
							if($pagina_anterior != 0){
								?><a href="administrativo.php?link=50&pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a><?php
							}else{
								?><span aria-hidden="true">&laquo;</span><?php
							}
						?>
					</li>
					<?php
						//Apresentar a paginação
						for($i = 1; $i < $num_pagina + 1; $i++){
							?>
								<li><a href="administrativo.php?link=50&pagina=<?php echo $i; ?>">
									<?php echo $i; ?>
								</a></li>
							<?php
						}
					?>
					<li>
						<?php 
							if($pagina_posterior <= $num_pagina){
								?><a href="administrativo.php?link=50&pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a><?php
							}else{
								?><span aria-hidden="true">&raquo;</span><?php
							}
						?>
					</li>
				</ul>
			</nav>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
