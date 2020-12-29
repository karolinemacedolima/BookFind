<?php
session_start();
	include_once("conexao.php");
	
	$_SESSION['idusuario'];
	$id_de = $_SESSION['idusuario'];
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: loginusu.php");
		exit;
		}
	else{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
 
</head>
<body >
  
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Sistema de Cadastro</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
    </ul>
  </div>
</nav>
  
 <div class="container-fluid bg-1 text-center">
  <h3 class="margin">Perfil</h3>
  <div class="fotop">
					<?php
					$id=$_GET["id"];
							$select="select *from insti where idinsti='$id'";
							$sql=mysqli_query($conn,$select);
							$dados=mysqli_fetch_object($sql);
						
					?>
  <h3><?php
							
							echo "Olá: $dados->nome";
						?></h3>
						 
</div> 

<meta name="viewport" content="width=device-width, initial-scale=1">
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
</style>
</head>
<body>



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
  

</html>
        <div class="desloga" >
		<?php $idusu= $_SESSION['idusuario'];?>
				  <p><a href="seguirinsti.php?id=<?php echo $dados->idinsti;?>&idusuario=<?php echo $idusu;?>" class="btn btn-primary mb-2" value="$id">Seguir</a></p>
				</div>
				  <div class="desloga" >
		<?php $idusu= $_SESSION['idusuario'];?>
				  <p><a href="chatpessoa.php?id=<?php echo $dados->idinsti;?>&idusuario=<?php echo $idusu;?>" class="btn btn-primary mb-2" value="$id">Conversar com <?php echo $dados->nome?></a></p>
				</div>
				<div class="desloga">
				  <p><a href="deixardeseguirinsti.php?id=<?php echo $dados->idinsti;?>&idusuario=<?php echo $idusu;?>" class="btn btn-primary mb-2">Deixar de seguir</a></p>
				</div>
				
			</div>
		</div>
	</body>
</html>
<?php
	}
?>