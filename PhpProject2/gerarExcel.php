<?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Avaliação de Propriedade Rural</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'msgcontatos.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="2">';
		$html .= '<tr>';
		$html .= '<td colspan="9"><center>Caracterização do sistema de produção</center></tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Nome Propriedade</b></td>';
		$html .= '<td><b>Proprietário</b></td>';
		$html .= '<td><b>Endereco</b></td>';
		$html .= '<td><b>Municipio</b></td>';
		$html .= '<td><b>Telefone / Celular</b></td>';
		$html .= '<td><b>Email</b></td>';
		$html .= '<td><b>Tipo</b></td>';
		$html .= '<td><b>OBservação</b></td>';
		$html .= '<td><b>Total Hectares</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_dados_pessoais = "SELECT * FROM usuarios";
		$resultado_dados_pessoais = mysqli_query($conn, $result_dados_pessoais);
		
		while($row_dados_pessoais = mysqli_fetch_assoc($resultado_dados_pessoais)){
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["nome"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["nomep"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["endereco"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["municipio"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["celular"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["email"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["tipo"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["obs"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["total"].'</td>';
			
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>