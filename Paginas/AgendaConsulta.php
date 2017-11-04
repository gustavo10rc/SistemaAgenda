<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset"UTF-8">
		<title>Agenda</title>
			<link rel="stylesheet" type="text/css" href="estilo/style.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
		     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

	<?php session_start("usuario_logado"); ?>
	<?php  if(isset($_SESSION["usuario_logado"])=== true): ?> 

<body background="Imagens/madeira1.jpg">
		<br><br><br><br><br>
		<center>
	        
	          <h2><b>Agenda Telefônica: Área de consulta</b></h2>
	        	<br>
		        <form method="POST" action="../Form/AgendaForm.php">
			
					<h3>ID:<input type="text" name="ID"> </h3>
					<br>
					<input type="submit" name="Consultar" value="Consultar" class="btn btn-primary btn-lg" >
				</form>
	    </center> 
	    		<div class="areaimagem">
					<b>Sistema de Agênda telefônica</b>
					<img src="Imagens/agenda-icon.png" width="10%">
				</div>
</body>
</html>

<?php else:
	echo "<br><br><br><br>";
	echo "<center> <h1> Acesso não permitido!!! <br> Voltar a página Login e realiza-lo </h1> </center>"; 
	echo "<center> <input type=\"button\" value=\"Voltar Menu\" onclick=\"javascript: location.href='../Paginas/PaginaLogin.php';\"class=\"btn btn-primary\"/></center>";
	?>
<?php endif; ?>
