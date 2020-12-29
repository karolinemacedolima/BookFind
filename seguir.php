<?php
session_start();
	include_once("conexao.php");
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
		}
	else{
		$tipo2=$_SESSION["tipo"];
		$tipo=$_GET["tipo"];
		$id_para=$_GET["id"];
$id_de=$_GET['idusuario'];

$count= 0;
		if($id_de == $id_para and $tipo==$tipo2){
			 echo "
                    <script language='javascript' type='text/javascript'>alert('Erro!');window.location.href='perfilvisu.php?id=". $id_para .  "&tipo=". $tipo . "'</script>";
                ;   
		}
		$query= mysqli_query($conn,"SELECT * FROM seguidores WHERE id_de = '$id_de'AND id_para = '$id_para'")or die(mysqli_error($conn));
		while ($why=mysqli_fetch_array($query)){
	if ($why['id_para']==$id_para){
		echo "
                    <script language='javascript' type='text/javascript'>alert('Você já segue');window.location.href='perfilvisu.php?id=" . $id_para . "'</script>";
                ;  
				$count++;
		}}
	if ($count>=1) { echo "
                    <script language='javascript' type='text/javascript'>alert('Não foi possivel seguir!');window.location.href='perfilvisu.php?id=" . $id_para . "'</script>";
	;   } else{
    $result_usuario = "INSERT into seguidores (id_de,id_para,tipo_de,tipo_para) VALUES ('$id_de','$id_para','$tipo2','$tipo')" or die (mysqli_error($conn));
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) > 0){
		echo "
                    <script language='javascript' type='text/javascript'>alert('Seguido com sucesso!');window.location.href='perfilvisu.php?id=" . $id_para . "'</script>";
	; 
                 
            }else{
             echo "
                    <script language='javascript' type='text/javascript'>alert('Seguido com sucesso!');window.location.href='perfilvisu.php?id=" . $id_para . "'</script>";
	; 
			}

}
	}?>