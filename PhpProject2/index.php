
<?php 
	include_once("conexao.php");
	session_start();
        //*//
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Avaliação de Propriedade Rural</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}

</style>
	<body>
	
		
		<div class="container theme-showcase" role="main">
			<div class="page-header">
			<h1>ÍNDICE DE COMPETITIVIDADE “DENTRO DA PORTEIRA”</h1>
			</div>
			<br>
			<br>
			
		
			<?php
				if($_SERVER['REQUEST_METHOD']=='POST'){
					$request = md5(implode($_POST));
					if(isset($_SESSION['ultima_request']) && $_SESSION['ultima_request'] == $request){
						echo "Propriedade já foi inserido";
					}else{	
						$_SESSION['ultima_request'] = $request;
						$nome = $_POST['nome'];
						$telefone = $_POST['telefone'];
						$celular = $_POST['celular'];
						$email = $_POST['email'];
						$endereco = $_POST['endereco'];
						$enderecoc = $_POST['enderecoc'];
						$municipio = $_POST['municipio'];

						$_SESSION['nome'] = $nome;
						$_SESSION['telefone'] = $telefone;
						$_SESSION['celular'] = $celular;
						$_SESSION['email'] = $email;
						$_SESSION['endereco'] = $endereco;
						$_SESSION['enderecoc'] = $enderecoc;	
						$_SESSION['municipio'] = $municipio;
												
						$result_dados_pessoais = "INSERT INTO usuarios (nome, telefone, celular, email, endereco, enderecoc, municipio) VALUES ('$nome', '$telefone', '$celular', '$email', '$endereco', '$enderecoc', '$municipio')";
						$resultado_dados_pessoais= mysqli_query($conn, $result_dados_pessoais);
						$ultimo_id = mysqli_insert_id($conn);	
						echo $ultimo_id;
					}
				}
			?>
			 <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#dados_pessoais" aria-controls="home" role="tab" data-toggle="tab">Anexo 1 - CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO</a></li>
 +				<li role="presentation"><a href="#anexo2" aria-controls="anexo2" role="tab" data-toggle="tab">Anexo 2 - QUESTIONÁRIO PARA A MENSURAÇÃO DA COMPETITIVIDADE NA BOVINOCULTURA DE CRIA</a></li>
  				
			  </ul>
			<br>
			<br>
				
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation"class="active"><a href="#dados_pessoais" aria-controls="home" role="tab" data-toggle="tab">Identificação da Propriedade Rural</a></li>
				<li role="presentation"><a href="#atividade" aria-controls="atividade" role="tab" data-toggle="tab">Atividades Desenvolvidas</a></li>
				<li role="presentation"><a href="#perfil" aria-controls="perfil" role="tab" data-toggle="tab">Perfil</a></li>
				<li role="presentation"><a href="#rebanho" aria-controls="rebanho" role="tab" data-toggle="tab">Estrutura do Rebanho</a></li>
				<li role="presentation"><a href="#colaboradores" aria-controls="colaboradores" role="tab" data-toggle="tab">Nº de Colaboradores fixos na Propriedade</a></li>
				
			  </ul>
			  
			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="dados_pessoais">
					<div style="padding-top:30px;">
					<div class="page-header">
					<h3>Anexo 1 - CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO</h3>
					</div>
						<form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nome da Propriedade Rural:</label>
                                <div class="col-sm-10">
                                    <input type="text" name='nome' class="form-control" id="nome" placeholder="Nome Completo" value="<?php if(isset($_SESSION['nome'])){ echo $_SESSION['nome']; }?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Telefone:</label>
                                <div class="col-sm-10">
                                    <input type="text" name='telefone' class="form-control" id="telefone" placeholder="Telefone" value="<?php if(isset($_SESSION['telefone'])){ echo $_SESSION['telefone']; } ?>">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Celular:</label>
                                <div class="col-sm-10">
                                    <input type="text" name='celular' class="form-control" id="celular" placeholder="Celular" value="<?php if(isset($_SESSION['celular'])){ echo $_SESSION['celular']; } ?>">
                                </div>
								</div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">E-mail:</label>
                                <div class="col-sm-10">
                                    <input type="text" name='email' class="form-control" id="email" placeholder="E-mail" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; }?>">
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Endereço da Propriedade:</label>
                                <div class="col-sm-10">
                                    <input type="text" name='endereco' class="form-control" id="endereco" placeholder="Endereco" value="<?php if(isset($_SESSION['endereco'])){ echo $_SESSION['endereco']; }?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Endereço de Correspondência:</label>
                                <div class="col-sm-10">
                                    <input type="text" name='enderecoc' class="form-control" id="enderecoc" placeholder="EnderecoC" value="<?php if(isset($_SESSION['enderecoc'])){ echo $_SESSION['enderecoc']; } ?>">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Município:</label>
                                <div class="col-sm-10">
                                    <input type="text" name='municipio' class="form-control" id="municipio" placeholder="Municipio" value="<?php if(isset($_SESSION['municipio'])){ echo $_SESSION['municipio']; } ?>">
                                </div>
                            </div>
							<br>
							<br>
							<div class="form-group">
							 <table style="width:100%">
								<caption><b>Tipo da Propriedade</b></caption>
								<tr>
								<th>Tipo</th>
								<th>Módulo Fiscal</th>
								<th>Área (hectares)</th>
								<th>Observação</th>
								<th>Área Total Exata (ha)</th>
								</tr>
								<tr>
								<td><input type="radio" name="tipo" value="mini" checked> Minifúndio <br></td>
								<td>-1 MF</td>
								<td>- de 28</td>
								<td>Agricultura Familiar</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='total' class="form-control" id="total" placeholder="total" value="<?php if(isset($_SESSION['total'])){ echo $_SESSION['total']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td><input type="radio" name="tipo" value="pequena" checked> Pequena <br></td>
								<td>1 a 4 MF</td>
								<td>29 – 112</td>
								<td>Agricultura Familiar</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='total' class="form-control" id="total" placeholder="total" value="<?php if(isset($_SESSION['total'])){ echo $_SESSION['total']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td><input type="radio" name="tipo" value="media" checked> Média <br></td>
								<td>-1 MF</td>
								<td>- de 28</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='total' class="form-control" id="total" placeholder="total" value="<?php if(isset($_SESSION['total'])){ echo $_SESSION['total']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="grande" checked> Grande <br></td>
								<td>+ de 15 MF</td>
								<td>+ 420</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='total' class="form-control" id="total" placeholder="total" value="<?php if(isset($_SESSION['total'])){ echo $_SESSION['total']; } ?>">
                                </div>
								</td>
								</tr>
								</table>
								<br>
								<br>
							</div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="atividade">
					<div style="padding-top:20px;">
					<div class="page-header">
					<h3>Anexo 1 - CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO</h3>
					</div>
					 <form class="form-horizontal"  action="" method="POST">
                            <div class="form-group">
                                <table style="width:100%">
								
								<tr>
								<th>3.1. Tipo</th>
								<th>3.2. Área útil (hectares)</th>
								<th>3.3. Obs.</th>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="corte" checked> Bovinocultura de Corte <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='area' class="form-control" id="area" placeholder="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="leite" checked> Bovinocultura de Leite <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='area' class="form-control" id="area" placeholder="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="ovino" checked> Ovinocultura <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='area' class="form-control" id="area" placeholder="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="equino" checked> Equinos <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='area' class="form-control" id="area" placeholder="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="pesca" checked> Pesca e Aqüicultura <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='area' class="form-control" id="area" placeholder="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="agricultura" checked> Agricultura <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='area' class="form-control" id="area" placeholder="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="floresta" checked> Florestamento <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='area' class="form-control" id="area" placeholder="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="horta" checked> Hortifrutigranjeiros <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='area' class="form-control" id="area" placeholder="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> <input type="radio" name="tipo" value="outras" checked> Outras Criações Zootécnicas <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='area' class="form-control" id="area" placeholder="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</tr>
								</table>

                            </div>
                           
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="perfil">
					<div style="padding-top:20px;">
					<div class="page-header">
					<h3>Anexo 1 - CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO</h3>
					</div>
					 <form class="form-horizontal"  action="" method="POST">
                            <div class="form-group">
                                <table style="width:100%">
								
								<tr>
								<th>4.1. Escolaridade</th>
								<th>4.2. Atividade Principal</th>
								</tr>
								<tr>
								<td> <input type="radio" name="escolaridade" value="corte" checked> Não alfabetizado <br></td>
								<td> <input type="radio" name="atividade" value="corte" checked> Aposentado <br></td>
								</tr>
								<tr>
								<td> <input type="radio" name="escolaridade" value="corte" checked> Fundamental <br></td>
								<td> <input type="radio" name="atividade" value="corte" checked> Profissional Liberal <br></td>
								</tr>
								<tr>
								<td> <input type="radio" name="escolaridade" value="corte" checked> Médio <br></td>
								<td> <input type="radio" name="atividade" value="corte" checked> Funcionário Público <br></td>
								</tr>
								<tr>
								<td> <input type="radio" name="escolaridade" value="corte" checked> Graduação <br></td>
								<td> <input type="radio" name="atividade" value="corte" checked> Empresário do setor privado <br></td>
								</tr>
								<tr>
								<td> <input type="radio" name="escolaridade" value="corte" checked> Pós-Graduação <br></td>
								<td> <input type="radio" name="atividade" value="corte" checked> Produtor Rural <br></td>
								</tr>
								<tr>
								<td>
								<div class="col-sm-10">
                                    Obs: <input type="text" name='escolaridade' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    Obs: <input type="text" name='atividade' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>
								</table>
                            </div>
                            <div class="form-group">
                                <table style="width:100%">
								<caption><b>Padrão Racial Predominante do Rebanho</b></caption>
								<tr>
								<th>5.1. Grupo racial</th>
								</tr>
								<tr>
								<td> <input type="radio" name="racial" value="corte" checked> BB (Angus, Devon e Hereford)<br></td>
								</tr>
								<tr>
								<td> <input type="radio" name="racial" value="corte" checked> CC (Charolês, Limousin e Simental) <br></td>
								</tr>
								<tr>
								<td> <input type="radio" name="racial" value="corte" checked> ZE (Zebuínas) <br></td>
								</tr>
								<tr>
								<td> <input type="radio" name="racial" value="corte" checked> SI (Brangus, Braford e Canchim) <br></td>
								</tr>
								<tr>
								<td> <input type="radio" name="racial" value="corte" checked> MI (Indefinido) <br></td>
								</tr>
								<tr>
								
								</table>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="rebanho">
					<div style="padding-top:20px;">
					<div class="page-header">
					<h3>Anexo 1 - CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO</h3>
					</div>
					 <form class="form-horizontal"  action="" method="POST">
                            <div class="form-group">
                                <table align='center' style="width:100%">
								
								<tr>
								<th align='center'>Categoria</th>
								<th align='center'>Nº de animais*</th>
								<th align='center'>% </th>
								<th align='center'> UA</th>
								<th align='center'> %UA</th>
								<th align='center'> Peso Médio</th>
								</tr>
								<tr>
								<td> Terneiros<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Terneiras<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Novilhas (1 ano)<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Novilhas (2 anos)<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Novilhos (1 anos)<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Novilhos (2 anos)<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Vacas de cria <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Vacas de descarte<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Touros (1 à 2 anos)<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Touros (2 à 3 anos)<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Touros (+ 3 anos)<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Equinos<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Ovinos<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								<tr>
								<td> Outros- Qual? <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='animais' class="form-control" id="animais" placeholder="animais" value="<?php if(isset($_SESSION['animais'])){ echo $_SESSION['animais']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagem' class="form-control" id="porcentagem" placeholder="porcentagem" value="<?php if(isset($_SESSION['porcentagem'])){ echo $_SESSION['porcentagem']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='ua' class="form-control" id="ua" placeholder="ua" value="<?php if(isset($_SESSION['ua'])){ echo $_SESSION['ua']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='porcentagemUa' class="form-control" id="porcentagemUa" placeholder="porcentagemUa" value="<?php if(isset($_SESSION['porcentagemUa'])){ echo $_SESSION['porcentagemUa']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='peso' class="form-control" id="peso" placeholder="peso" value="<?php if(isset($_SESSION['peso'])){ echo $_SESSION['peso']; } ?>">
                                </div>
								</td>
								</tr>
								
								</table>
								*Referente a última declaração do rebanho (mar/abr).
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="colaboradores">
					<div style="padding-top:20px;">
					<div class="page-header">
					<h3>Anexo 1 - CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO</h3>
					</div>
					 <form class="form-horizontal"  action="" method="POST">
                            <div class="form-group">
                                <table align='center' style="width:100%">
								
								<tr>
								<th align='center'>Categoria</th>
								<th align='center'>Número</th>
								<th align='center'>Observação </th>
								
								</tr>
								<tr>
								<td> Peão<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								<tr>
								<td> Capataz<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								<tr>
								<td> Cozinheira<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								<tr>
								<td> Caseiro<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								<tr>
								<td> Veterinário<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								<tr>
								<td> Zootecnista <br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								<tr>
								<td> Agrônomo<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								<tr>
								<td> Temporários<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                  Tipo ? <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								<tr>
								<td> Técnicos<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								<tr>
								<td> Outros<br></td>
								<td>
								<div class="col-sm-10">
                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="numero" value="<?php if(isset($_SESSION['numero'])){ echo $_SESSION['numero']; } ?>">
                                </div>
								</td>
								<td>
								<div class="col-sm-10">
                                   Tipo ? <input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>">
                                </div>
								</td>								
								</tr>
								
								</table>
								
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="anexo2">
					<div style="padding-top:20px;">
					 <form class="form-horizontal"  action="" method="POST">
                          <div class="form-group">
							<table  style="width:100%" border="2">
							 <h4>Anexo 2 - QUESTIONÁRIO PARA A MENSURAÇÃO DA COMPETITIVIDADE NA BOVINOCULTURA DE CRIA</h4>
								<caption><b>Atenção: Este questionário é composto por perguntas dicotômicas e as mesmas têm unicamente duas respostas possíveis: "Sim" ou "Não" permitindo
								identificar claramente a opinião do entrevistado sobre a temática proposta.</b></caption>
								<br>
								<br>
							<center><b>Responder SIM ou NÃO.</b></center>
								<tr>
								<th>1.</th>    
								<th ><center>Direcionador: TECNOLOGIA</center></th>
								<th colspan="2" >RESPOSTA</th>
								
								<th ROWSPAN="2" ><center>OBSERVAÇÕES</center></th>
								</tr>
								<tr>
								<td>-1.1</td>
								<td><center><b>ADEQUAÇÃO DO SISTEMA DE PRODUÇÃO DE CRIA</b></center></td>
								<td>SIM </td>
								<td>NÃO</td>
								</tr>
								<tr>
								<td>1.1.1. </td>
								<td> Existe um sistema de produção de cria claramente definido?</td>
								<td><input type="radio" name="resposta" value="mini" > </td>
								<td><input type="radio" name="resposta" value="mini" > </td>
								<td></td>
								</tr>
								<tr>
								<td>1.1.2. </td>
								<td>Existe algum grau de diferenciação/especialização no sistema em questão?</td>
								<td><input type="radio" name="resposta1" value="mini" > </td>
								<td><input type="radio" name="resposta1" value="mini" > </td>
								<td><input type="radio" name="obs" value="mini" > Rastreabilidade <input type="radio" name="obs" value="mini" > Produção de touros 	
								<input type="radio" name="obs" value="mini" > Padrão racial <input type="radio" name="obs" value="mini" > Outros. <div class="col-sm-10"> Qual?<input type="text" name='obs' class="form-control" id="obs" placeholder="obs" value="<?php if(isset($_SESSION['obs'])){ echo $_SESSION['obs']; } ?>"></td>
								</tr>
								
								<tr>
								<td>1.1.3. </td>
								<td> Há uma escala adequada (número de animais em relação ao tamanho da propriedade)?</td>
								<td><input type="radio" name="resposta2" value="mini" > </td>
								<td><input type="radio" name="resposta2" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs2' class="form-control" id="obs2" placeholder="obs2" value="<?php if(isset($_SESSION['obs2'])){ echo $_SESSION['obs2']; } ?>">
                                *A equipe calcula.
								</div></td>
								</tr>
								
<tr>
								<td ROWSPAN="2"><b>-1.2</b></td> 
								<th ROWSPAN="2"><b><center>QUALIDADE, MANEJO E ESPÉCIES DE PASTAGENS UTILIZADAS</center></b></th>
								<th colspan="2" >RESPOSTA</th>
								
								<th ROWSPAN="2" ><center>OBSERVAÇÕES</center></th>
								</tr>
								<tr>
								<td>SIM </td>
								<td>NÃO</td>
								</tr>
								<tr>
								<td>1.2.1.</td>
								<td> Adota alguma prática para o melhoramento do campo nativo?</td>
								<td><input type="radio" name="resposta3" value="mini" > </td>
								<td><input type="radio" name="resposta3" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs3' class="form-control" id="obs3" placeholder="obs3" value="<?php if(isset($_SESSION['obs3'])){ echo $_SESSION['obs3']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.2.2.  </td>
								<td>São cultivadas pastagens?</td>
								<td><input type="radio" name="resposta4" value="mini" > </td>
								<td><input type="radio" name="resposta4" value="mini" > </td>
								<td><input type="radio" name="obs1" value="mini" > Inverno <input type="radio" name="obs1" value="mini" > Verão</td>
								</tr>
								
								<tr>
								<td>1.2.3. </td>
								<td>  Conhece a porcentagem de campo nativo e a percentagem de pastagens cultivadas da propriedade?</td>
								<td><input type="radio" name="resposta5" value="mini" > </td>
								<td><input type="radio" name="resposta5" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs4' class="form-control" id="obs4" placeholder="obs4" value="<?php if(isset($_SESSION['obs4'])){ echo $_SESSION['obs4']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.2.4.</td>
								<td> Existe associação entre gramíneas e/ou leguminosas?</td>
								<td><input type="radio" name="resposta6" value="mini" > </td>
								<td><input type="radio" name="resposta6" value="mini" > </td>
								<td></td>
								</tr>
								<tr>
								<td>1.2.5.  </td>
								<td>São utilizadas técnicas de manejo de pastagens ?</td>
								<td><input type="radio" name="resposta7" value="mini" > </td>
								<td><input type="radio" name="resposta7" value="mini" > </td>
								<td></td>
								</tr>
								
								<tr>
								<td>1.2.6. </td>
								<td>Existe algum grau de degradação nas pastagens (invasoras, clarões no pasto, erosão, não desejáveis, outras)?</td>
								<td><input type="radio" name="resposta8" value="mini" > </td>
								<td><input type="radio" name="resposta8" value="mini" > </td>
								<td>*A equipe deve observar o grau de degradação.</td>
								</tr>
								<tr>
								<td>1.2.7.</td>
								<td>No caso da existência de invasoras, há um manejo adequado para o controle das mesmas?</td>
								<td><input type="radio" name="resposta9" value="mini" > </td>
								<td><input type="radio" name="resposta9" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs5' class="form-control" id="obs5" placeholder="obs5" value="<?php if(isset($_SESSION['obs5'])){ echo $_SESSION['obs5']; } ?>">
                                </div><input type="radio" name="obs2" value="mini" > Químico <input type="radio" name="obs2" value="mini" > Físico</td>
								</tr>
								<tr>
								<td>1.2.8.  </td>
								<td>São feitas análises periodicas do solo?</td>
								<td><input type="radio" name="resposta10" value="mini" > </td>
								<td><input type="radio" name="resposta10" value="mini" > </td>
								<td></td>
								</tr>
								
								<tr>
								<td>1.2.9. </td>
								<td> Utiliza adubação de base (calagem e NPK)?</td>
								<td><input type="radio" name="resposta11" value="mini" > </td>
								<td><input type="radio" name="resposta11" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs6' class="form-control" id="obs6" placeholder="obs6" value="<?php if(isset($_SESSION['obs6'])){ echo $_SESSION['obs6']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.2.10.</td>
								<td> Utiliza adubação de cobertura (uréia/ NPK/ MAP, DAP)?</td>
								<td><input type="radio" name="resposta12" value="mini" > </td>
								<td><input type="radio" name="resposta12" value="mini" > </td>
								<td></td>
								</tr>
								<tr>
								<td>1.2.11.  </td>
								<td>Existe algum sistema de irrigação para as pastagens?</td>
								<td><input type="radio" name="resposta13" value="mini" > </td>
								<td><input type="radio" name="resposta13" value="mini" > </td>
								<td><input type="radio" name="obs3" value="mini" >  Pivot <input type="radio" name="obs3" value="mini" >  Malha</td>
								</tr>
								
								<tr>
								<td ROWSPAN="2"><b>-1.3</b></td> 
								<th ROWSPAN="2"><b><center>SUPLEMENTAÇÃO ANIMAL</center></b></th>
								<th colspan="2" >RESPOSTA</th>
								
								<th ROWSPAN="2" ><center>OBSERVAÇÕES</center></th>
								</tr>
								<tr>
								<td>SIM </td>
								<td>NÃO</td>
								</tr>
								<tr>
								<td>1.3.1.</td>
								<td> Utiliza suplementação com sal branco?</td>
								<td><input type="radio" name="resposta14" value="mini" > </td>
								<td><input type="radio" name="resposta14" value="mini" > </td>
								<td></td>
								</tr>
								<tr>
								<td>1.3.2.  </td>
								<td>Utiliza suplementação com mistura mineral completa?</td>
								<td><input type="radio" name="resposta15" value="mini" > </td>
								<td><input type="radio" name="resposta15" value="mini" > </td>
								<td></td>
								</tr>
								
								<tr>
								<td>1.3.3. </td>
								<td>  Utiliza suplementação com alimento volumoso?</td>
								<td><input type="radio" name="resposta16" value="mini" > </td>
								<td><input type="radio" name="resposta16" value="mini" > </td>
								<td><input type="radio" name="obs4" value="mini" >  Feno <input type="radio" name="obs4" value="mini" >  Palha <input type="radio" name="obs4" value="mini" >  Silagem <input type="radio" name="obs4" value="mini" > Pré Secado
								<input type="radio" name="obs4" value="mini" >  Outro <div class="col-sm-10"> Qual?<input type="text" name='obs7' class="form-control" id="obs7" placeholder="obs7" value="<?php if(isset($_SESSION['obs7'])){ echo $_SESSION['obs7']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.3.4.</td>
								<td> Utiliza suplementação para categorias específicas?</td>
								<td><input type="radio" name="resposta17" value="mini" > </td>
								<td><input type="radio" name="resposta17" value="mini" > </td>
								<td><input type="radio" name="obs5" value="mini" >  Creep-feeding <input type="radio" name="obs5" value="mini" >  Touros <input type="radio" name="obs5" value="mini" >  Terneiros <input type="radio" name="obs5" value="mini" > Vacas de cria
								<input type="radio" name="obs5" value="mini" >  Teor de P (fósforo) </td>
								</tr>
								<tr>
								<td>1.3.5.  </td>
								<td>Utiliza suplementação proteica em épocas estratégicas?</td>
								<td><input type="radio" name="resposta18" value="mini" > </td>
								<td><input type="radio" name="resposta18" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs8' class="form-control" id="obs8" placeholder="obs8" value="<?php if(isset($_SESSION['obs8'])){ echo $_SESSION['obs8']; } ?>">
                                </div></td>
								</tr>
								
								<tr>
								<td>1.3.6. </td>
								<td>Utiliza suplementação proteica em épocas estratégicas?</td>
								<td><input type="radio" name="resposta19" value="mini" > </td>
								<td><input type="radio" name="resposta19" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs9' class="form-control" id="obs9" placeholder="obs9" value="<?php if(isset($_SESSION['obs9'])){ echo $_SESSION['obs9']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.3.7.</td>
								<td>Utiliza suplementação energética em épocas estratégicas?</td>
								<td><input type="radio" name="resposta20" value="mini" > </td>
								<td><input type="radio" name="resposta20" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs10' class="form-control" id="obs10" placeholder="obs10" value="<?php if(isset($_SESSION['obs10'])){ echo $_SESSION['obs10']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.3.8.  </td>
								<td>Todos os cochos são cobertos?</td>
								<td><input type="radio" name="resposta21" value="mini" > </td>
								<td><input type="radio" name="resposta21" value="mini" > </td>
								<td><input type="radio" name="obs6" value="mini" >   Maioria <input type="radio" name="obs6" value="mini" >   Nenhum</td>
								</tr>
								
								<td ROWSPAN="2"><b>-1.4</b></td> 
								<th ROWSPAN="2"><b><center>INTEGRAÇÃO LAVOURA- PECUÁRIA</center></b></th>
								<th colspan="2" >RESPOSTA</th>
								
								<th ROWSPAN="2" ><center>OBSERVAÇÕES</center></th>
								</tr>
								<tr>
								<td>SIM </td>
								<td>NÃO</td>
								</tr>
								<tr>
								<td>1.4.1.</td>
								<td> A propriedade trabalha com integração lavoura- pecuária?</td>
								<td><input type="radio" name="resposta22" value="mini" > </td>
								<td><input type="radio" name="resposta22" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs11' class="form-control" id="obs11" placeholder="obs11" value="<?php if(isset($_SESSION['obs11'])){ echo $_SESSION['obs11']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.4.2.  </td>
								<td>A exploração agrícola é feita pelo produtor/ pecuarista?</td>
								<td><input type="radio" name="resposta23" value="mini" > </td>
								<td><input type="radio" name="resposta23" value="mini" > </td>
								<td></td>
								</tr>
								
								<tr>
								<td>1.4.3. </td>
								<td>  Os recursos e maquinários utilizados na agricultura são utilizados na pecuária?</td>
								<td><input type="radio" name="resposta24" value="mini" > </td>
								<td><input type="radio" name="resposta24" value="mini" > </td>
								<td></td>
								</tr>
								<tr>
								<td>1.4.4.</td>
								<td> Os funcionários da lavoura atuam na pecuária?</td>
								<td><input type="radio" name="resposta25" value="mini" > </td>
								<td><input type="radio" name="resposta25" value="mini" > </td>
								<td></td>
								</tr>
								
								<td ROWSPAN="2"><b>1.5</b></td> 
								<th ROWSPAN="2"><b><center>MANEJO DOS POTREIROS</center></b></th>
								<th colspan="2" >RESPOSTA</th>
								
								<th ROWSPAN="2" ><center>OBSERVAÇÕES</center></th>
								</tr>
								<tr>
								<td>SIM </td>
								<td>NÃO</td>
								</tr>
								<tr>
								<td>1.5.1.</td>
								<td> É utilizada subdivisão nos potreiros/ invernada?</td>
								<td><input type="radio" name="resposta26" value="mini" > </td>
								<td><input type="radio" name="resposta26" value="mini" > </td>
								<td></td>
								</tr>
								<tr>
								<td>1.5.2.  </td>
								<td>É utilizada cerca elétrica para subdividir os potreiros/ invernada?</td>
								<td><input type="radio" name="resposta27" value="mini" > </td>
								<td><input type="radio" name="resposta27" value="mini" > </td>
								<td></td>
								</tr>
								
								<tr>
								<td>1.5.3. </td>
								<td>Utiliza outra técnica para subdividir os potreiros/ invernada?</td>
								<td><input type="radio" name="resposta28" value="mini" > </td>
								<td><input type="radio" name="resposta28" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs12' class="form-control" id="obs12" placeholder="obs12" value="<?php if(isset($_SESSION['obs12'])){ echo $_SESSION['obs12']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.5.4.</td>
								<td>Possui um mapa ilustrando o número de potreiros/ invernada da propriedade?</td>
								<td><input type="radio" name="resposta29" value="mini" > </td>
								<td><input type="radio" name="resposta29" value="mini" > </td>
								<td></td>
								</tr>

								<td ROWSPAN="2"><b>1.6</b></td> 
								<th ROWSPAN="2"><b><center>MANEJO REPRODUTIVO</center></b></th>
								<th colspan="2" >RESPOSTA</th>
								
								<th ROWSPAN="2" ><center>OBSERVAÇÕES</center></th>
								</tr>
								<tr>
								<td>SIM </td>
								<td>NÃO</td>
								</tr>
								<tr>
								<td>1.6.1.</td>
								<td>Há uma estação de monta, parição e desmame previamente definida?</td>
								<td><input type="radio" name="resposta30" value="mini" > </td>
								<td><input type="radio" name="resposta30" value="mini" > </td>
								<td><div class="col-sm-10"> Qual a duração/ período?<input type="text" name='obs13' class="form-control" id="obs13" placeholder="obs13" value="<?php if(isset($_SESSION['obs13'])){ echo $_SESSION['obs13']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.6.2.  </td>
								<td>A estação de acasalamento das novilhas é mais curta que a das vacas?</td>
								<td><input type="radio" name="resposta31" value="mini" > </td>
								<td><input type="radio" name="resposta31" value="mini" > </td>
								<td></td>
								</tr>
								
								<tr>
								<td>1.6.3. </td>
								<td>É utilizada alguma técnica de desmame antecipado?</td>
								<td><input type="radio" name="resposta32" value="mini" > </td>
								<td><input type="radio" name="resposta32" value="mini" > </td>
								<td><input type="radio" name="obs7" value="mini" >  Precoce <input type="radio" name="obs7" value="mini" >  Interrompido/ Temporário <input type="radio" name="obs7" value="mini" >  Outro.<div class="col-sm-10"> Qual?<input type="text" name='obs14' class="form-control" id="obs14" placeholder="obs14" value="<?php if(isset($_SESSION['obs14'])){ echo $_SESSION['obs14']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.6.4.</td>
								<td>Utiliza inseminação artificial (IA)?</td>
								<td><input type="radio" name="resposta33" value="mini" > </td>
								<td><input type="radio" name="resposta33" value="mini" > </td>
								<td><div class="col-sm-10"> Quais categorias?<input type="text" name='obs14' class="form-control" id="obs14" placeholder="obs14" value="<?php if(isset($_SESSION['obs14'])){ echo $_SESSION['obs14']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.6.5.</td>
								<td>Utiliza inseminação artificial com sincronização de cios?</td>
								<td><input type="radio" name="resposta34" value="mini" > </td>
								<td><input type="radio" name="resposta34" value="mini" > </td>
								<td><div class="col-sm-10"> Quais categorias?<input type="text" name='obs15' class="form-control" id="obs15" placeholder="obs15" value="<?php if(isset($_SESSION['obs15'])){ echo $_SESSION['obs15']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.6.6.</td>
								<td>Utiliza inseminação artificial em tempo fixo (IATF)?</td>
								<td><input type="radio" name="resposta35" value="mini" > </td>
								<td><input type="radio" name="resposta35" value="mini" > </td>
								<td><div class="col-sm-10"> Quais categorias?<input type="text" name='obs16' class="form-control" id="obs16" placeholder="obs16" value="<?php if(isset($_SESSION['obs16'])){ echo $_SESSION['obs16']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.6.7. </td>
								<td>Utiliza outra biotécnica reprodutiva?</td>
								<td><input type="radio" name="resposta36" value="mini" > </td>
								<td><input type="radio" name="resposta36" value="mini" > </td>
								<td><input type="radio" name="obs8" value="mini" >  Transferência de embriões <input type="radio" name="obs8" value="mini" >  FIV <input type="radio" name="obs8" value="mini" >  Outra.<div class="col-sm-10"> 
								Qual?<input type="text" name='obs15' class="form-control" id="obs15" placeholder="obs15" value="<?php if(isset($_SESSION['obs15'])){ echo $_SESSION['obs15']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.6.8.</td>
								<td>A relação touro/ vaca é adequada?</td>
								<td><input type="radio" name="resposta37" value="mini" > </td>
								<td><input type="radio" name="resposta37" value="mini" > </td>
								<td><div class="col-sm-10"> Quais categorias?<input type="text" name='obs16' class="form-control" id="obs16" placeholder="obs16" value="<?php if(isset($_SESSION['obs16'])){ echo $_SESSION['obs16']; } ?>">
                                *A equipe calcula.</div></td>
								</tr>
								<tr>
								<td>1.6.9.  </td>
								<td>A categoria de vaca primíparas, vazias no toque, são sempre descartadas?</td>
								<td><input type="radio" name="resposta38" value="mini" > </td>
								<td><input type="radio" name="resposta38" value="mini" > </td>
								<td></td>
								</tr>
								<tr>
								<td>1.6.10.  </td>
								<td>A categoria de vaca multíparas, vazias no toque, são sempre descartadas?</td>
								<td><input type="radio" name="resposta39" value="mini" > </td>
								<td><input type="radio" name="resposta39" value="mini" > </td>
								<td></td>
								</tr>
								<td>1.6.11.  </td>
								<td>É feito rodízio de touros dentro da estação de monta?</td>
								<td><input type="radio" name="resposta40" value="mini" > </td>
								<td><input type="radio" name="resposta40" value="mini" > </td>
								<td>*Plantel</td>
								</tr>
								<tr>
								<td>1.6.12. </td>
								<td>Os touros são separados por lotes?</td>
								<td><input type="radio" name="resposta32" value="mini" > </td>
								<td><input type="radio" name="resposta32" value="mini" > </td>
								<td><input type="radio" name="obs9" value="mini" >  Idade<input type="radio" name="obs9" value="mini" >  Hierarquia <input type="radio" name="obs9" value="mini" >  Raça 
								<input type="radio" name="obs9" value="mini" >  Chifres</td>
								</tr>
								<tr>
								<td>1.6.13.</td>
								<td>É feito o exame andrológico nos touros anualmente?</td>
								<td><input type="radio" name="resposta33" value="mini" > </td>
								<td><input type="radio" name="resposta33" value="mini" > </td>
								<td><div class="col-sm-10"> Quando?<input type="text" name='obs17' class="form-control" id="obs17" placeholder="obs17" value="<?php if(isset($_SESSION['obs17'])){ echo $_SESSION['obs17']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.6.14.</td>
								<td>Existe um peso mínimo alvo para o primeiro acasalamento das novilhas?</td>
								<td><input type="radio" name="resposta34" value="mini" > </td>
								<td><input type="radio" name="resposta34" value="mini" > </td>
								<td><div class="col-sm-10"> Qual?<input type="text" name='obs18' class="form-control" id="obs18" placeholder="obs18" value="<?php if(isset($_SESSION['obs18'])){ echo $_SESSION['obs18']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.6.15.</td>
								<td>Utiliza o ECC como uma ferramenta de manejo em épocas estratégicas?</td>
								<td><input type="radio" name="resposta35" value="mini" > </td>
								<td><input type="radio" name="resposta35" value="mini" > </td>
								<td><div class="col-sm-10"> Quando?<input type="text" name='obs19' class="form-control" id="obs19" placeholder="obs19" value="<?php if(isset($_SESSION['obs19'])){ echo $_SESSION['obs19']; } ?>">
                                </div></td>
								</tr>
								
								<td ROWSPAN="2"><b>1.7</b></td> 
								<th ROWSPAN="2"><b><center>GENÉTICA DO REBANHO</center></b></th>
								<th colspan="2" >RESPOSTA</th>
								
								<th ROWSPAN="2" ><center>OBSERVAÇÕES</center></th>
								</tr>
								<tr>
								<td>SIM </td>
								<td>NÃO</td>
								</tr>
								<tr>
								<td>1.7.1.</td>
								<td>O rebanho apresenta um padrão racial adequado ao ambiente?</td>
								<td><input type="radio" name="resposta36" value="mini" > </td>
								<td><input type="radio" name="resposta36" value="mini" > </td>
								<td>*A equipe deve observar.</td>
								</tr>
								<tr>
								<td>1.7.2.  </td>
								<td>Utiliza ferramentas de melhoramento genético animal para a seleção dos seus animais?</td>
								<td><input type="radio" name="resposta37" value="mini" > </td>
								<td><input type="radio" name="resposta37" value="mini" > </td>
								<td>Qual? <input type="radio" name="obs10" value="mini" >  Cruzamento<input type="radio" name="obs10" value="mini" >  Seleção <input type="radio" name="obs10" value="mini" > DEP’s
								<input type="radio" name="obs10" value="mini" >  MMolecular  <input type="radio" name="obs10" value="mini" >  Sumário de touros </td>
								</tr>
								
								<tr>
								<td>1.7.3. </td>
								<td>Os touros são provenientes/ adquiridos de outras propriedades que utilizam programas de melhoramento genético?</td>
								<td><input type="radio" name="resposta38" value="mini" > </td>
								<td><input type="radio" name="resposta38" value="mini" > </td>
								<td></td>
								</tr>
								<td ROWSPAN="2"><b>1.8</b></td> 
								<th ROWSPAN="2"><b><center>SANIDADE DO REBANHO</center></b></th>
								<th colspan="2" >RESPOSTA</th>
								
								<th ROWSPAN="2" ><center>OBSERVAÇÕES</center></th>
								</tr>
								<tr>
								<td>SIM </td>
								<td>NÃO</td>
								</tr>
								<tr>
								<td>1.8.1.</td>
								<td>Existe um calendário sanitário pré definido de acordo com o ambiente da propriedade?</td>
								<td><input type="radio" name="resposta39" value="mini" > </td>
								<td><input type="radio" name="resposta39" value="mini" > </td>
								<td>*Verificar o plano.</td>
								</tr>
								<tr>
								<td>1.8.2.  </td>
								<td>O calendário sanitário é acessível a todos os colaboradores?</td>
								<td><input type="radio" name="resposta40" value="mini" > </td>
								<td><input type="radio" name="resposta40" value="mini" > </td>
								<td></td>
								</tr>
								
								<tr>
								<td>1.8.3. </td>
								<td>São aplicadas as vacinas contra as principais doenças endêmicas?</td>
								<td><input type="radio" name="resposta41" value="mini" > </td>
								<td><input type="radio" name="resposta41" value="mini" > </td>
								<td><input type="radio" name="obs11" value="mini" >  Clostridiose <input type="radio" name="obs11" value="mini" >  Raiva  <input type="radio" name="obs11" value="mini" > Brucelose <input type="radio" name="obs11" value="mini" >  Outro.
								<div class="col-sm-10"> Qual?<input type="text" name='obs20' class="form-control" id="obs20" placeholder="obs20" value="<?php if(isset($_SESSION['obs20'])){ echo $_SESSION['obs20']; } ?>">
                                </div></td> 
								</tr>
								<tr>
								<td>1.8.4.</td>
								<td>Utiliza inseminação artificial (IA)?</td>
								<td><input type="radio" name="resposta42" value="mini" > </td>
								<td><input type="radio" name="resposta42" value="mini" > </td>
								<td><div class="col-sm-10"> Quais categorias?<input type="text" name='obs14' class="form-control" id="obs14" placeholder="obs14" value="<?php if(isset($_SESSION['obs14'])){ echo $_SESSION['obs14']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.8.5.</td>
								<td>Utiliza inseminação artificial com sincronização de cios?</td>
								<td><input type="radio" name="resposta43" value="mini" > </td>
								<td><input type="radio" name="resposta43" value="mini" > </td>
								<td><div class="col-sm-10"> Quais categorias?<input type="text" name='obs15' class="form-control" id="obs15" placeholder="obs15" value="<?php if(isset($_SESSION['obs15'])){ echo $_SESSION['obs15']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.8.6.</td>
								<td>Utiliza inseminação artificial em tempo fixo (IATF)?</td>
								<td><input type="radio" name="resposta44" value="mini" > </td>
								<td><input type="radio" name="resposta44" value="mini" > </td>
								<td><div class="col-sm-10"> Quais categorias?<input type="text" name='obs16' class="form-control" id="obs16" placeholder="obs16" value="<?php if(isset($_SESSION['obs16'])){ echo $_SESSION['obs16']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.8.7. </td>
								<td>Utiliza outra biotécnica reprodutiva?</td>
								<td><input type="radio" name="resposta45" value="mini" > </td>
								<td><input type="radio" name="resposta45" value="mini" > </td>
								<td><input type="radio" name="obs8" value="mini" >  Transferência de embriões <input type="radio" name="obs8" value="mini" >  FIV <input type="radio" name="obs8" value="mini" >  Outra.<div class="col-sm-10"> 
								Qual?<input type="text" name='obs15' class="form-control" id="obs15" placeholder="obs15" value="<?php if(isset($_SESSION['obs15'])){ echo $_SESSION['obs15']; } ?>">
                                </div></td>
								</tr>
								<tr>
								<td>1.8.8.</td>
								<td>A relação touro/ vaca é adequada?</td>
								<td><input type="radio" name="resposta46" value="mini" > </td>
								<td><input type="radio" name="resposta46" value="mini" > </td>
								<td><div class="col-sm-10"> Quais categorias?<input type="text" name='obs16' class="form-control" id="obs16" placeholder="obs16" value="<?php if(isset($_SESSION['obs16'])){ echo $_SESSION['obs16']; } ?>">
                                *A equipe calcula.</div></td>
								</tr>
								
								</table>
								<br>
								<br>
							</div>  
                        </form>
					</div>
				</div>
			  </div>
			  </form>
			</div>
			</div>
			</div>
			</form>
			
			<br>
			<br>
		
							
	
	
		
		
		</div>	
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>