<?php

include_once("conexao.php");

session_start();
	$tipo = $_GET["tipo"];
	$id=$_GET['id'];

if($tipo=1) {
		header("Location: perfilvisuinst.php?id=".$id);
		exit;
		}else if ($tipo=2){header("Location: perfilvisupes.php?id=".$id);
		exit;}
	
?>	