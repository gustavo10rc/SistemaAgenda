<!-- controle de sessão-->
<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset"UTF-8">
	<link rel="stylesheet" type="text/css" href="../Paginas/estilo/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<title>Agenda</title>
</head>
<body background="../Paginas/Imagens/madeira1.jpg">
	<?php
		if(isset($_POST['Conectar']))
		{
			if(!empty($_POST['usuario'])&& !empty($_POST['senha']))
			{
				if($_POST['senha']=="admin")
				{
				$_SESSION["usuario_logado"]= true;
				$_SESSION["usuario"] = $_POST['usuario'];


				echo"<script> window.location.href='../Paginas/index.php'</script>";

				}
					else
					{
						echo "<br> ";
						echo "<div class=\"alert alert-warning\">
  							<strong>Atenção! Senha incorreta. Por favor, digite a senha correta. </strong>
							</div>";
						echo "<br>";
						echo "<input type=\"button\" value=\"Voltar Login\" onclick=\"javascript: location.href='../Paginas/PaginaLogin.php';\"class=\"btn btn-primary\"/>";
					}
			} 
			else
				{
					echo " <br><br>";
					echo "<div class=\"alert alert-danger\">
  						<strong>Atenção! Você deve digitar um usuário e uma senha.</strong> 
						</div>";
					echo "<input type=\"button\" value=\"Voltar Login\" onclick=\"javascript: location.href='../Paginas/PaginaLogin.php';\"class=\"btn btn-primary\"/>";
				}	
		}
	
		if(isset($_POST['desconectar']))

			{
				session_unset();
				session_destroy();
				
				echo"<script> window.location.href='../Paginas/PaginaLogin.php'</script>";
			}




	?>

		<div class="areaimagem">
				<b>Sistema de Agênda telefônica</b>
				<img src="../Paginas/Imagens/agenda-icon.png" width="10%">
			</div>
</body>
</html>