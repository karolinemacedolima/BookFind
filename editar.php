<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcuticon" type="image/png" href="" >
<link rel="icon" type="imagem/png" href="2lfg.png" />
<link rel="stylesheet" href="cadastroinst.css">
<title>Book Find</title>
</head>

<?php
session_start();
include_once("conexao.php");
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: indexsem.php");
		exit;
		}
	else{
$_SESSION['idusuario'];
$id = $_SESSION['idusuario'];
$result_usuario = "SELECT * FROM usuarios WHERE idusuario = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_array($resultado_usuario);
$senha = $row_usuario ['senha'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar dados </title>		
	</head>
	<body>
		
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="edit_usuario.php" enctype="multipart/form-data">
						<div class="algi">
							<input type="file" id="arquivo" name="arquivo" onChange="AlteraConteudo()">
						</div>
						<div class="opend">
							<div id="ok">
								<?php
									$foto=$_SESSION['foto'];
									echo"
								<img src='./img/$foto'>
									";
								?>
							</div>
						</div>
						

			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			<label>Celular: </label>
			<input type="number" name="celular" placeholder="Digite o seu melhor celular" value="<?php echo $row_usuario['celular']; ?>"><br><br>
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>
			<label>Senha: </label>
			<input type="password" name="senha" placeholder="Digite a nova senha"  ><br><br>
			
			<input type="submit" value="Editar" >
		</form>
	</body>
</html>

<?php }?>

