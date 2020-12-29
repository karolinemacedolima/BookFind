<?php

session_start();
	include_once("conexao.php");

 
                    ?>



<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js"</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular-route.min.js"></script>
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
                               
</head>

<body>

<header class="cabecalho">
<div id="logo">
<a href="index.php" target="_self"><img src="2lfg.png"></a>
</div>
<div id="mapa">
<div id= "txtimg"> 
<h1>Busca pela localização</h1>
</div>
   <div id="myBtn2">
  <a ><img src="lupa.png"></a>
  </div>


<div id="myModal2" class="modal2">


  <div class="modal-content2">
    <div class="modal-body2"> <span class="close2">&times;</span>
<form method="POST" action="">
<input type="text"  name="busca" required id="busca" placeholder="Busque a instituição pelo estado, cidade ou bairro ex:santana de parnaíba" style="width: 75%; ">
<input type="submit" name="SendPesqUser" style="width: 10%; padding: 1px ;" >
</form>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal2.style.display = "none";
  }
}
</script>


</div>

</header>
 
	 <br class="fix">
	   <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix">

<?php 
	$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$busca = filter_input(INPUT_POST, 'busca', FILTER_SANITIZE_STRING);
$result_usuario = "SELECT * FROM insti where cidade like'%$busca%' or estado like'%$busca%' or bairro like'%$busca%' or rua like'%$busca%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				$dados=$row_usuario['foto'];?>
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
		}}

			

			

?>




     <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix"> 
	 <br class="fix"> 

       

   
</body>

</html>
		<?php ?>