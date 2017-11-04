<?php
include '../DAO/AgendaDAO.php';

	function mandaSalvar($Nome,$Telefone)
	{
		salvar($Nome, $Telefone);
	}

	function mandaConsultar($ID)

	{
	
	 return consultar($ID);
	}

	function mandaExcluir($exclui)
	{
		 exclui($exclui);
	}

	function MandaAlterar($ID,$Nome,$Telefone)
	{
		altera($ID,$Nome,$Telefone);
	}
?>