<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset"UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<title>Agenda</title>
</head>

<body   background="../Paginas/Imagens/madeira1.jpg">

<?php
	session_start("usuario_logado");	
	?>
	<?php  if(isset($_SESSION["usuario_logado"])=== true): ?> 
		

	<form method="POST" action="../Form/AgendaForm.php">
		<br>
		<center><h3><b>Página de cadastro</b></h3></center>
		<br>
		<b>NOME:</b>		
		<input class="form-control" type="text" placeholder="Insira o nome aqui..."  name="Nome">
		<br>
		<b>TELEFONE:</b>
		<input class="form-control" type="text" name="Telefone" placeholder="Insira o telefone aqui...">
		<br>
		<button type="submit" class="btn btn-primary btn-lg btn-block"  name="cadastrar" value="Inserir"> cadastrar</button>
		</form>
		<div class="areaimagem">
		<b>Sistema de Agênda telefônica</b>
		<img src="../Paginas/Imagens/agenda-icon.png" width="10%">
		</div>
		
</body>
</html>

<?php else:
	echo "<br><br><br><br>";
	echo "<center> <h1> Acesso não permitido!!! <br> Voltar a página Login e realiza-lo </h1> </center>"; 
	echo "<center> <input type=\"button\" value=\"Voltar Menu\" onclick=\"javascript: location.href='../Paginas/PaginaLogin.php';\"class=\"btn btn-primary\"/></center>";
	?>
<?php endif; ?>