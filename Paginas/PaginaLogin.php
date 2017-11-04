
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset"UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Agenda</title>

	 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	<body background="Imagens/madeira1.jpg">
		<div class="container">
		  <br><br><br><br><br>
	<center><h1><b>Sistema de Agênda telefônica</b></h1></center>
		  
		  <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ABRIR LOGIN</button>
		  </center><br>
		  	
			  <!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">LOGIN:</h4>
			        </div>
			        <div class="modal-body">
				        <?php 
							date_default_timezone_set("America/Sao_Paulo"); 
							$data = date("d/m/Y h:i:s");
							setcookie("cookie_agenda", $data); 
						?>
				          <form action="../Form/ControlSession.php" method="POST"> 
							USUÁRIO:<input name="usuario" type="text"/><br><br>
							SENHA: <input name="senha" type="password"/><br><br>

							<br>
							<?php	
								if(isset($_COOKIE["cookie_agenda"]))
								{
							 		echo "Seu último acesso foi em: ".$_COOKIE["cookie_agenda"]." "; 
							 	}
							?>
							<hr>
							
							<input type="submit" name="Conectar" value="Conectar" class="btn btn-success" >
						</form>
			        </div>

			      </div>
			      
			    </div>
			  </div>
			  
			</div>


			<div class="areaimagem">
				<b>Sistema de Agênda telefônica</b>
				<img src="Imagens/agenda-icon.png" width="10%">
			</div>

	</body>
</html>			