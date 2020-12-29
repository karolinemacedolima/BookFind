<?php

include_once("conexao.php");

session_start();

	$_SESSION["nome"];
	$_SESSION["email"];
	$_SESSION["senha"];

if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: indexsem.php");
		exit;
		}else{header("Location: indexlog.php");
		exit;}
	
?>	