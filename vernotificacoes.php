
 <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js"</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular-route.min.js"></script>

</head>
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
	width:30px;
	height: 30px;
	float: right;
	margin-right: 100px;
	margin-top: 50px;
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

.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 55%;
  top: 0;
  width: 10%; /* Full width */
  height: 10%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content2 {
  position: fixed;
  
  bottom: 93%;
   height: 0.5%;
  width: 50%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close2 {
  color: #fefefe;

  font-size: 28px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}

.modal-header2 {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body2 {padding: 2px 16px;}

.modal-footer2 {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {right: -300px; opacity: 0} 
  to {right: 0; opacity: 1}
}

@keyframes slideIn {
  from {right: -300px; opacity: 0}
  to {right: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}
#pop{display:none;position:absolute;
top:50%;
left:50%;
margin-left:0px;
margin-top:100px;
padding:10px;
width:300px;
height:200px;
border:1px solid #d0d0d0}



</style>

<body>


<header class="cabecalho">
<div id="logo">
<a href="index.php" target="_self"><img src="2lfg.png"></a>
</div>
<div id="mapa">
<div id= "txtimg"> 
<h1><p ->Notificações</p></h1>
</div>
</header>
 
	 <br class="fix">
	   <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix">
	 
	   <?php	
  include_once("conexao.php");
			session_start();
				$_SESSION['idusuario'];
	 $id = $_SESSION['idusuario'];
		$tipo=$_SESSION['tipo'];
                $chats = mysqli_query($conn,"SELECT * FROM notificacoes WHERE id_para = '$id' and tipo_para='$tipo'order by idnotificacoes asc");
                while($ch = mysqli_fetch_array($chats)) { 
				 $var= $ch['id_de']; 
if ($ch['tipo_de']==2 ){
$usere = mysqli_query($conn, "SELECT * FROM usuarios  WHERE idusuario = '$var'")or die(mysqli_error($conn));
$us = mysqli_fetch_array($usere) or die($conn);
$id_de= $us['idusuario'];
$tipo_de=$us['tipo'];
$chat = mysqli_query($conn,"SELECT * FROM notificacoes WHERE id_para = '$id' and tipo_para='$tipo' and id_de='$id_de' and tipo_de='$tipo_de'order by idnotificacoes asc");
} 

if ($ch['tipo_de']==1 ) {
	

$usere = mysqli_query($conn, "SELECT * FROM insti  WHERE idinsti = '$var'")or die(mysqli_error($conn));
$us = mysqli_fetch_array($usere);
$id_de= $ch['id_de'];
$tipo_de=$ch['tipo_de'];
$chat = mysqli_query($conn,"SELECT * FROM notificacoes WHERE id_para = '$id' and tipo_para='$tipo' and id_de='$id_de' and tipo_de='$tipo_de'order by idnotificacoes asc");
}  
				 ?>
<div class="chat" id="content">
				<div  class="tm" id="lista">
<div class="container">
<ul class="list-group">
                <li class="list-group-item">
<a href="conversar.php?id_de=<?php echo $id_de;?>&id_para=<?php echo $id;?>&tipo_para=<?php echo $tipo;?>&tipo_de=<?php echo $tipo_de;?>"class="btn btn-default btn-lg">Você possui notificações de:</a>
 <img src="img/<?php echo $us['foto']; ?>" >
  <span  class="right" style="width:100%; "><?php echo $us['nome'] ; ?></span></li>
  </ul>
</div></div>
</div>


  
</body>
				<?php } ?>


