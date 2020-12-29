<?php session_start();
	$_SESSION['idusuario'];
	include_once("conexao.php"); 
	 $id_para=$_GET['id'];
	 	$tipo_para=$_GET['tipo_para'];
		$tipo_de=$_SESSION['tipo'];
	$id_de = $_SESSION['idusuario'];
	?>
	<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js"</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular-route.min.js"></script>
<script type="text/javaScript">

function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'chat_envia.php?id=<?php echo $id_para;?>&tipo_para=<?php echo $tipo_para?>&tipo_de=<?php echo $tipo_de?>', true);
			req.send();
		}
		setInterval(function(){ajax();}, 1);
</script>

<body>
<header class="cabecalho">

<div id="logo">
<a href="index.php" target="_self"><img src="2lfg.png"></a>
</div>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
  background-image:url('mapafundo.png');
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

#titulo{
	font-family: "Swis721 LtEx BT";
	color: #ca5812;
    font-size: 20px;
}

.btn{
  font-family: "Swis721 LtEx BT";	
  background-color: #ca5812;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  float: right;
}

textarea {
  font-family: "Swis721 LtEx BT";
  width: 100%;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 12px;
  resize: none;
}

#msg{
  font-family:"Swis721 LtEx BT";
  color:#9a9597;
}

 #logo img{
  width: 175px;	
  height: 100px;
  padding-left: 20px; 
  }
  
  #chat ::-webkit-scrollbar {
  width: 10px;
}
#chat {
	height:400px;	
}
/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

</style>

</head>
<body>
<div id="chat" style="overflow:auto; w:640;">
</div>
            
  <form action=""  method="POST">
    <div id="titulo">
	<h1>Chat</h1>
    </div>
    
	<div id="msg">
    <label for="msg"><b>Message</b></label></div>
    <textarea placeholder="Escreva aqui" name="mensagem"  style="width:100%;"required></textarea>
    <div id="botao">
	<button type="submit" class="btn">
	Envia
	</button>
	</div>
	<input type="hidden" name="env" id="ev" value="envMsg" />
    
  </form>


 <?php if(isset($_POST['env'])){
        
	$mensagem = $_POST['mensagem'];
		
		
    $resultado_usuario = mysqli_query($conn,"INSERT INTO chat(id_de, id_para, mensagem,hora,tipo_de,tipo_para) VALUES ('$id_de', '$id_para','$mensagem',now(), '$tipo_de','$tipo_para')")or die(mysqli_error($conn));        
   
		if (mysqli_affected_rows($conn) > 0) {
			
					 $resultado_usuario = mysqli_query($conn,"INSERT INTO notificacoes(id_de, id_para,tipo_de,tipo_para) VALUES ('$id_de', '$id_para', '$tipo_de','$tipo_para')")or die(mysqli_error($conn)); 
				}
                else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel envia mensagem');window.location.href='chatpessoa.php?id=" . $id_para . "'</script>";    
            }
    
				}
                       
                         


?>



  