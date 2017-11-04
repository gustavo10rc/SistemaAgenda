
	<?php
	include'../BO/AgendaBO.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</head>

<?php
	session_start("usuario_logado");	
	?>
	<?php  if(isset($_SESSION["usuario_logado"])=== true): ?> 

<body background="Imagens/madeira1.jpg">
<table class="table table-striped table-bordered table-hover">	
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Ações</th>
		</tr>
	</thead>

	<tbody>
		<?php

		$teste;

		$ID=null;

		$result = mandaConsultar($ID);
		while($row = $result -> fetch(PDO::FETCH_OBJ))
			{
				echo '<tr>';
				echo'<td>'.$row->idRegistro.'</td>'.'<td>'. $row->Nome.'</td>'.'<td>'. $row ->Telefone.'</td>';
				
				echo'<td>'."<a href=\"atuaex.php?idParaAtualizar=".$row->idRegistro."\"   class=\"btn btn-success\"> <span class=\"glyphicon glyphicon-edit\"></span> Editar</a>";
				
				echo'&nbsp'.'&nbsp'.'&nbsp';

				echo"<a href=\"atuaex.php?idParaExcluir=".$row->idRegistro."\" class=\"btn btn-danger\"> <span class=\"glyphicon glyphicon-remove\"></span> Excluir </a>";

				echo '</td></tr>';
			}
		
		
		?>
		<?php 
			if(isset($_GET['idParaAtualizar']))
			{	
				echo "<input type=\"hidden\" name=\"id\" value=\"" . $_GET['idParaAtualizar'] . "\">";
				$retorna=$_GET['idParaAtualizar'];
				$result=mandaConsultar($retorna);
				
			}
			if(isset($_GET['idParaExcluir']))
			{
				$exclui= $_GET['idParaExcluir'];
				mandaExcluir($exclui);
				echo"<script> window.location.href='../Paginas/atuaex.php'</script>";
			}
		 
		?>
</tbody>
</table>



<input type="button" value="Voltar Menu" onclick="javascript: location.href='../Paginas/index.php';"class="btn btn-primary"/>
			
	          <form method="POST" action="../Form/AgendaForm.php?iduser=<?= $_GET['idParaAtualizar'] ?>">
					<br>
				<?php while($row = $result -> fetch(PDO::FETCH_OBJ)):?>
						
				<h4><b>NOME:</b> <input type="text" name="Nome" value="<?php echo $row->Nome?>"> </h4>
				<h4><b>TELEFONE:</b> <input type="text" name="Telefone" value="<?php echo $row->Telefone?>"></h4>
				<br>

				<input type="submit" name="alterar" value="Alterar" class="btn btn-warning">		 
				<?php endwhile; ?>
			</form>
			
					<div class="areaimagem1">
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