<?php
include'../BO/AgendaBO.php';


	if(isset($_POST['cadastrar']))
	{

	
		if(isset($_POST['Nome']) && isset($_POST['Telefone']))
		{

			$varnome = $_POST['Nome'];
			$vartelefone = $_POST['Telefone'];
				
			include '../Paginas/Formulario.php';
			
			if($varnome!="" && $vartelefone!="")
			{
			mandaSalvar($varnome, $vartelefone);

			echo "<SCRIPT LANGUAGE='JavaScript'>window.alert('".$varnome." Inserido na agenda.')</SCRIPT>";

			echo"<script> window.location.href='../Paginas/index.php'</script>";
			}
			else
			{
				echo "<br><br>"."<div class=\"alert alert-danger\">
  						<strong>Atenção! Os campos devem ser preenchidos.</strong> 
						</div>"."<br><br>";
			}
		}	
		

			
	}	

if(isset($_POST['Consultar']))
	{
		echo'<table class="table table-striped table-bordered table-hover">	
				<thead>
					<tr>
					
						<th>Nome</th>
						<th>Telefone</th>
					</tr>
				</thead>';
		$ID = $_POST['ID'];
		$result= Mandaconsultar($ID);
		if($result)
		{
			while($row = $result -> fetch(PDO::FETCH_OBJ))
			{
				?>

					<tbody>
							<?php				
								echo '<tr>';
								echo'<td>'. $row->Nome.'</td>'.'<td>'. $row ->Telefone.'</td>';	
								echo '</td></tr>';
			
							?>
			
					</tbody>
				
<?php
			}
			echo '</table>';
		}
	}

if(isset($_POST['alterar']))
{
	
		$ID =  $_GET['iduser'];
		$Nome = $_POST['Nome'];
		$Telefone= $_POST['Telefone'];
			MandaAlterar($ID,$Nome,$Telefone);
		echo "<SCRIPT LANGUAGE='JavaScript'>window.alert('".$Nome." Atualizado na agenda.')</SCRIPT>";

		echo"<script> window.location.href='../Paginas/Atuaex.php'</script>";	
}


?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="../Paginas/estilo/style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <title>Agenda</title>
	  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="../Paginas/Imagens/madeira1.jpg">
<input type="button" value="Voltar Menu" onclick="javascript: location.href='../Paginas/index.php';"class="btn btn-secondary"/>
			
		
</body>
</html>