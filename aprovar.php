<?php
session_start();
include_once("conexao.php");
$_SESSION['idusuario'];
$id=$_GET['id'];
$busca= mysqli_query($conn,"select * from pendencias where idpendencias='$id'");
$row = mysqli_fetch_array($busca);
$id = $row['id_de'];
$tipo = $row['tipo'];
  $titulo = $row['titulo'];
	$autor = $row['autor'];
		$descricao = $row['descricao'];
$arquivo= $row['foto'];
$result_usuario = "insert into livros (titulo,autor,descricao,id_de,tipo,foto) values ('$titulo','$autor','$descricao','$id','$tipo','$arquivo')"or die ($conn);
$resultado_usuario=mysqli_query($conn, $result_usuario) or die ($conn);
if(mysqli_affected_rows($conn)){
	$id=$_GET['id'];
$deleta= mysqli_query($conn,"delete from pendencias where idpendencias='$id'") or die ($conn);
if(mysqli_affected_rows($conn)){
	echo "<script language='javascript' type='text/javascript'>alert('Livro inserido com sucesso');window.location.href='pendencias.php'</script>";
}
}
else{
	echo "<script language='javascript' type='text/javascript'>alert('O livro não foi inserido com sucesso');window.location.href='pendencias.php'</script>";
}

	

?>