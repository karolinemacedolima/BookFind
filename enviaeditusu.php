<?php
session_start();
include_once("conexao.php");
$_SESSION['idusuario'];
$id = $_SESSION['idusuario'];
  $nome = $_POST['nome'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
		$descricao = $_POST['desc'];
	$senha = md5($_POST['senha']);
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
$result_usuario = "UPDATE usuarios SET nome='$nome', email='$email', celular='$celular',descricao='$descricao', senha='$senha', foto='$nArq' WHERE idusuario='$id'";
$resultado_usuario=mysqli_query($conn, $result_usuario) or die ($conn);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	unset($_SESSION['foto']);
		$_SESSION['foto']=$nArq;
		$_SESSION['descricao']=$descricao;
	header("Location: perfil.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editarusu.php");
}



?>