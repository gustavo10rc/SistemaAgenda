<?php
	include '../Util/ConexaoBanco.php';

	$conn = conectar();

	function salvar($Nome,$Telefone)
	{
		global $conn;

		try
		{
			

		// echo $query;

		$conn->exec('INSERT INTO registro(Nome,Telefone) 
			values("'.$Nome.'","'.$Telefone.'")');
	} 
	catch (Exception $e) 
	{
		echo "erro: ".$e;
	}

}

function consultar($ID)
{
	global $conn;

	try 
	{	
		if($ID != null)
		{	
			return $result = $conn->query("SELECT * FROM registro WHERE idRegistro = '$ID'");
		}
		else
		{
			return $result = $conn->query("SELECT * FROM registro");
		}	

	} 
	catch (Exception $e) 
	{
		echo "erro: ".$e;
		return null;
	}
}

function altera($ID,$Nome,$Telefone)
{
	global $conn;

	try 
	{	
			return $conn->query("UPDATE Registro SET Nome ='$Nome' ,Telefone ='$Telefone' WHERE idRegistro = '$ID'");
			

	} 
	catch (Exception $e) 
	{
		echo "erro: ".$e;
		return null;
	}
}

function exclui($ID)
{
	global $conn;

	try 
	{	
		 $conn->query(" DELETE  FROM Registro WHERE idRegistro = '$ID'");	

	} 
	catch (Exception $e) 
	{
		echo "erro: ".$e;
		return null;
	}
}


?>