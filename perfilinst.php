<?php
session_start();
	include_once("conexao.php");

	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: indexsem.php");
		exit;
		}
	else{
		$foto=$_SESSION['foto'];
							$nome=$_SESSION['nome'];
	$id=$_SESSION['idusuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcuticon" type="image/png" href="" >
<link rel="icon" type="imagem/png" href="2lfg.png" />
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js"</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular-route.min.js"></script>
<script type="text/javaScript">

function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('not').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'notificacoes.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);
</script> 

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
  <h3><?php echo "$nome";?></h3>
</div>  <?php
  echo"<img src='img/$foto' class='img-circle' alt='Bird' width='350' height='350' >"; 
  ?>
 <div id="not" >
</div>
</div>
</header>
<div class="container-fluid bg-2 text-center">
<div id = "titulo">
<h3>Descrição</h3>
</div>
<div id="txt">
  <?PHP  echo $_SESSION['descricao']?>
 </div>
 
<div id="tituloend"> 
 <h3>Endereço</h3>
</div>
<div id="txtend">
  <p>Estado:<?php  echo $_SESSION['estado'];?></p>
  <p>Cidade:<?php   echo $_SESSION['cidade'];?></p>
  <p>Bairro:<?php   echo $_SESSION['bairro'];?></p>
  <p>Rua:<?php   echo $_SESSION['rua'];?></p>
  <p>Numero:<?php   echo $_SESSION['numero'];?></p>
 </div>
 
 <div id="botao">
<a href="editarinst.php" class="btn btn-default btn-lg">Editar Dados</a> <a href="seguidores.php" class="btn btn-default btn-lg">Seguindo</a>
<a href="quemsegue.php" class="btn btn-default btn-lg">Seguidores</a>
</div>
<br class="fix">
<a href="sair.php" class="btn btn-default btn-lg">Deslogar</a> <a href="estante.php?id=<?PHP echo$id;?>" class="btn btn-default btn-lg">Ver estante</a>
</div>


</body>
</html>
	<?php }?>