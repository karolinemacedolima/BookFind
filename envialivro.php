<?php
session_start();
include_once("conexao.php");
$_SESSION['idusuario'];
$id = $_SESSION['idusuario'];
$tipo = $_SESSION['tipo'];
  $titulo = $_POST['titulolivro'];
	$autor = $_POST['autor'];
		$descricao = $_POST['descricao'];
$arquivo= isset($_FILES['arquivo'])?$_FILES['arquivo']:"";
	$nArq=$_FILES['arquivo']['name'];
	if($nArq!=""){
		
		if (isset($_FILES['arquivo'])) {

				   move_uploaded_file($_FILES['arquivo']['tmp_name'],'./img/'  .$_FILES['arquivo']['name'] );

		} else {
			echo  "<script language='javascript' type='text/javascript'>alert('Não possivel enviar o arquivo')</script>";
		}
	}
$result_usuario = "insert into pendencias (titulo,autor,descricao,id_de,tipo,foto) values ('$titulo','$autor','$descricao','$id','$tipo','$nArq')"or die ($conn);
$resultado_usuario=mysqli_query($conn, $result_usuario) or die ($conn);
if(mysqli_affected_rows($conn)){
	
	echo "<script language='javascript' type='text/javascript'>alert('Livro inserido com sucesso, aguarde a aprovação do administrador!');window.location.href='estante.php'</script>";
}else{
	echo "
                    <script language='javascript' type='text/javascript'>alert('Livro não inserido com sucesso, aguarde a verificação pelo administrador!');window.location.href='estante.php'</script>"
                ;
}



?>