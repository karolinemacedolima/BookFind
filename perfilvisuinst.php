<?php
session_start();
	include_once("conexao.php");
	
	$_SESSION['idusuario'];
	$id_de = $_SESSION['idusuario'];
	$tipo_de=$_SESSION['tipo'];
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: paglogin.php");
		exit;
		}
	else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil instituição</title>
  <?php
					$id=$_GET["id"];
							$select="select *from insti where idinsti='$id'";
							$sql=mysqli_query($conn,$select);
							$dados=mysqli_fetch_object($sql);
						
					?>
					<?php $idusu= $_SESSION['idusuario'];?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js"</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular-route.min.js"></script>
  <style>
  @font-face{
	font-family:"Swis721 LtEx BT";
	}
	
  header{
   background-image: url('mapafundo.png');
  }
  
  .bg-1 { 	
	font-family:"Swis721 LtEx BT";
  }
  .bg-2 { 
   
    color: #ffffff;
	font-family:"Swis721 LtEx BT";
  }
  .bg-3 { 
    background-color: #ffffff;
    color: #555555;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
    .navbar {
	background-color: rgba(0,0,0,0.0);
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-family:"Swis721 LtEx BT";
  }
  .navbar li{
  color: #ca5812;
  }
  .navbar-nav  li a:hover {
    color: #cf9977  !important;
  }
  #botao{
  float: center;
  font-family:"Swis721 LtEx BT";
  color:#ca5812;
  }
  #logo img{
  width: 175px;	
  height: 100px;
  padding-left: 20px; 
  }
  #titulo{
  color: #000053;
  }
  #txt{
  color:#9a9597;
  font-size: 20px;
  }
  #nome{
  color: #ca5812;
  }
  #tituloend{
  color: #000053;
  }
  #txtend{
  color:#9a9597;
  font-size: 20px;
  }
  
  </style>
</head>
<body>
<header class="cabecalho">

<div id="logo">
<a href="index.php" target="_self"><img src="2lfg.png"></a>
</div>

<div class="container-fluid bg-1 text-center">
<div id="nome">
  <h3><?php  echo"$dados->nome";?></h3>
</div>  <?php 
  echo"<img src='./img/$dados->foto' class='img-circle' alt='Bird' width='350' height='350'>"
  ?>
  
</div>
</header>
<div class="container-fluid bg-2 text-center">
<div id = "titulo">
<h3>Descrição</h3>
</div>
<div id="txt">
   <?php
$tipo_para=$dados->tipo;

   echo"$dados->descricao";?>
 </div>
 
<div id="tituloend"> 
 <h3>Endereço</h3>
</div>
<div id="txtend">
  <p>Estado:<?php  echo"$dados->estado";?></p>
  <p>Cidade:<?php  echo"$dados->cidade";?></p>
  <p>Bairro:<?php  echo"$dados->bairro";?></p>
  <p>Rua:<?php  echo"$dados->rua";?></p>
  <p>Numero:<?php  echo"$dados->numero";?></p>
 </div>
 
 <div id="botao">
<a href="seguir.php?id=<?php echo $dados->idinsti;?>&idusuario=<?php echo $idusu;?>&tipo=<?php echo $dados->tipo;?>" class="btn btn-default btn-lg">Seguir</a> <a href="chatpessoa.php?id=<?php echo $dados->idinsti;?>&idusuario=<?php echo $idusu;?>&tipo_para=<?php echo $tipo_para;?>&tipo_de=<?php echo $tipo_de;?>" class="btn btn-default btn-lg">Conversar</a>
 <a href="estantever.php?id=<?PHP echo$dados->idinsti;?>&tipo=<?php echo $dados->tipo;?>" class="btn btn-default btn-lg">Ver estante</a>
</div>

</div>


</body>
</html>
<?php
	}
?>