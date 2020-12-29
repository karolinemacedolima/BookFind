<?php

include_once("conexao.php");

session_start();

	$_SESSION["tipo"];
	

if($_SESSION["tipo"]==1) {
		header("Location: perfilinst.php");
		exit;
		}else if ($_SESSION["tipo"]==2)  {header("Location: perfilusu.php");
		exit;}
		else {
			header("Location: perfiladm.php");
		exit;	
		}
	
?>	