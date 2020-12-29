<?php

session_start();
	include_once("conexao.php");

	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: index.php");
		exit;
		}
	else{  
            
               
 $id_de=$_SESSION['idusuario'];
   $tipo=$_SESSION['tipo'];             


                                 $buscachat = mysqli_query($conn,"SELECT * FROM seguidores WHERE id_de = '$id_de' and tipo_de='$tipo'" );
                             
               
                                
                                
                      
                    ?>



<html lang="pt-br">
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style>
body{
	
}

.header{
	background-image: url('mapafundo.png');
	background-attachment: fixed;
}

#logo img{
	float: left;
    width: 150px;	
	height: 100px;
	background-color: rgba(0,0,0,0.0);
	padding-left: 20px;
}

#mapa{
	background-image: url(mapafundo.png);
	background-size: cover;
	height: 120px;
	width:100%;
}

#mapa img{
	height: 700px;
	width: 1340px;
	margin: 0px;
	padding: 0px;
	transition: 1.0s;
}
#txtimg {
	font-family: "Swis721 LtEx BT";
	color: #ca5812;
    font-size: 25px;
	position: absolute;
	left: 575px;
	transition: 1.5s;
	margin-top: 25px;
}

#txtimg a{
    text-decoration: none;
	color: #ca5812;
}

#txtimg a hover{
    color: #cf9977;
}

.chat{
	font-family:"Swis721 LtEx BT";
	font-size:20px;
	text-align: left;
	color:#9a9597;
    margin-left: 30px;
}

.chat a:link{
	text-decoration: none;
	color: #000053;
}

.chat img{
	width:150px;
	height:150px;
	float: left;

}
ul li {
  height: 165px;
}


</style>
                               
</head>


<body>

<header class="cabecalho">
<div id="logo">
<a href="index.php" target="_self"><img src="2lfg.png"></a>
</div>
<div id="mapa">
<div id= "txtimg"> 
<h1>Seguindo</h1>
</div>
</div>
</header>

  
	 
	 
	 <br class="fix">
	   <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix">


   

		
<?php

while ($row = mysqli_fetch_array($buscachat)){ 
$id_para=$row['id_para'];
$tipo=$row['tipo_para'];
if($tipo==2){
			$result_usuario = "SELECT * FROM usuarios WHERE idusuario='$id_para'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
		$dados=$row_usuario['foto'];
		        ?>
				<div class="chat" id="content">
				<div  class="tm" id="lista">
				<div class="container">
				<ul class="list-group">
                <li class="list-group-item">
				<?php
				echo "" . "<img src='./img/$dados'";
				echo "" . $row_usuario['nome'] . "<br>";
				echo "" . $row_usuario['email'] . "<br>";
				echo "<a href='perfilvisupes.php?id=" . $row_usuario['idusuario'] . "'>Perfil</a><br>";?></li>
</ul></div></div></div>
<?php	
}}
			else if($tipo==1){
				$result_usuario = "SELECT * FROM insti WHERE idinsti='$id_para'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				$dados=$row_usuario['foto'];
				?>
				<div class="chat" id="content">
				<div  class="tm" id="lista">
				<div class="container">
				<ul class="list-group">
                <li class="list-group-item">
				<?php
				echo"<img src='./img/$dados' >";
				echo "" . $row_usuario['nome'] . "<br>";
				echo "" . $row_usuario['email'] . "<br>";
				echo "<a href='perfilvisuinst.php?id=" . $row_usuario['idinsti'] . "'>Perfil</a><br>";?></li>
</ul></div></div></div>
<?php	
}
			}
}

?>
</div>

     <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix"> 

       

   
</body>

</html>
		<?php }?>