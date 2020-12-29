<?php
	session_start();
	include_once("conexao.php");
	$_SESSION['idusuario'];
$id = $_SESSION['idusuario'];
	$arquivo= isset($_FILES['arquivo'])?$_FILES['arquivo']:"";
	$nArq=$_FILES['arquivo']['name'];
	if($nArq!=""){
		echo "$nArq";
		if (isset($_FILES['arquivo'])) {
				echo "entrou";
				   move_uploaded_file($_FILES['arquivo']['tmp_name'],'./img/'  .$_FILES['arquivo']['name'] );
				echo " Arquivo enviado com sucesso";
		} else {
			echo "Não possivel enviar o arquivo";
		}
	}
	else{
		$_FILES['arquivo']['name']="perfil.png";
		$nArq=$_FILES['arquivo']['name'];
	}
	$email=$_SESSION['usuarioEmail'];
	$sql="update usuarios set foto='$nArq' where idusuario='$id'";
	$result=mysqli_query($conn,$sql);
	if($result){
		unset($_SESSION['foto']);
		$_SESSION['foto']=$nArq;
		header("location: perfil.php");
	}
	else{
		$_SESSION['cdErro']="<script language='javascript' type='text/javascript'>alert('Não foi possível alterar a imagem!')</script>";
		header("location: perfil.php");
	}
?>