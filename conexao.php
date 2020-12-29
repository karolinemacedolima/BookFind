<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
$servidor ="localhost"; 
$usuario ="root";
$senha = "root"; 
$banco ="bookfind"; 
//Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
		mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf8");
    }else{
       //echo "Conexao realizada com sucesso";
    }  
	function formatarHora($hora){
	return date('g:i a', strtotime($hora));
}
?>

</body>
</html>