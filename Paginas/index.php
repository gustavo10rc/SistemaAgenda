<?php

	session_start("usuario_logado");

	?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset"UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<title>Agenda</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</head>
<body background="Imagens/madeira1.jpg">

	<?php  if(isset($_SESSION["usuario_logado"])=== true): ?> 
	



	<br><br><br><br>
	<H1><center><b>AGENDA TELEFÔNICA</b></center></H1>
		<br><br>
		<center>
				<a class="a1" href="../Paginas/Formulario.php">Inserir</a>
				<br><br>
				<a class="a1" href="../Paginas/AgendaConsulta.php">consultar</a>
				<br><br>
				<a class="a1" href="../Paginas/Atuaex.php">Atualizar/Excluir</a> 
				<br><br>
				
				<form  method="POST" action="../Form/ControlSession.php">
					<button type="submit" class="btn btn-info btn-lg" name="desconectar">SAIR</button>
				</form>
		</center>
			
			<div class="areaimagem1">
				<b>Sistema de Agênda telefônica</b>
				<img src="Imagens/agenda-icon.png" width="10%">
			</div>
</body>
</body>
</html>

<?php else:
	echo "<br><br><br><br>";
	echo "<center> <h1> Acesso não permitido!!! <br> Voltar a página Login e realiza-lo </h1> </center>"; 
	echo "<center> <input type=\"button\" value=\"Voltar Menu\" onclick=\"javascript: location.href='../Paginas/PaginaLogin.php';\"class=\"btn btn-primary\"/></center>";
	?>
<?php endif; ?>
