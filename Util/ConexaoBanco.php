<?php
$conn = null;
	function conectar()
	{
		try
		{
			global $conn;
			$conn = new PDO('mysql:host=localhost;port=3306;dbname=AGENDA','root','root');
			return $conn;
		}
		catch(PDOException $e)
		{
			return "erro:" .$e; 
		}
	}
	function desconectar()
	{
		$conn = null;
	}

?>