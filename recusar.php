<?php
session_start();
include_once("conexao.php");
$id=$_GET['id'];
$result = "delete from pendencias where idpendencias='$id'"or die ($conn);
$resultado=mysqli_query($conn, $result) or die ($conn);
if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Livro excluido com sucesso</p>";
	header("Location: pendencias.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>O livro não foi excluido com sucesso</p>";
	header("Location: pendencias.php");
}



?>