<?php

include_once("conexao.php");
session_start();
	$_SESSION["nome"];
	$_SESSION["email"];
	$_SESSION["senha"];
	$_SESSION['idusuario'];
	$id_de=$_GET['id_de'];
	$tipo_de=$_GET['tipo_de'];
	$id_para = $_SESSION['idusuario'];
		$tipo_para = $_SESSION['tipo'];
			$deleta= mysqli_query($conn,"delete from notificacoes WHERE id_de = '$id_de' and tipo_de='$tipo_de' and id_para='$id_para' and tipo_para='$tipo_para'") or die ($conn);

		header("Location: chatpessoa.php?id=$id_de&idusuario$id_para&tipo_para=$tipo_de&tipo_de=$tipo_para");
		exit
	
?>	