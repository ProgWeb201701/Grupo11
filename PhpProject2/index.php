
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
		<title>Criar pagina com abas</title>
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
				<li role="presentation" class="active"><a href="#anexo1" aria-controls="anexo1" role="tab" data-toggle="tab">Anexo 1 - CARACTERIZAÇÃO DO SISTEMA DE PRODUÇÃO</a></li>
				<li role="presentation"><a href="#atividade" aria-controls="atividade" role="tab" data-toggle="tab">Anexo 2 - QUESTIONÁRIO PARA A MENSURAÇÃO DA COMPETITIVIDADE NA BOVINOCULTURA DE CRIA</a></li>
				
			  </ul>
			<br>
			<br>
				
			  <!-- Nav tabs -->
			 
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#dados_pessoais" aria-controls="home" role="tab" data-toggle="tab">Identificação da Propriedade Rural</a></li>
				<li role="presentation"><a href="#atividade" aria-controls="atividade" role="tab" data-toggle="tab">Atividades Desenvolvidas</a></li>
				<li role="presentation"><a href="#perfil" aria-controls="perfil" role="tab" data-toggle="tab">Perfil</a></li>
				<li role="presentation"><a href="#rebanho" aria-controls="rebanho" role="tab" data-toggle="tab">Estrutura do Rebanho</a></li>
				<li role="presentation"><a href="#colaboradores" aria-controls="colaboradores" role="tab" data-toggle="tab">Nº de Colaboradores fixos na Propriedade</a></li>
				
			  </ul>
			  
			  
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="dados_pessoais">
					<div style="padding-top:20px;">
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