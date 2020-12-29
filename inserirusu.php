<?php

    include_once("conexao.php");

    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	$senha = md5($_POST['senha']);
		$descricao="Personalize no editar dados";
	$confirmasenha = md5($_POST['confirmasenha']);
	
	
			$pegaEmail = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'")or die(mysqli_error($conexao));	
	
	if(mysqli_num_rows($pegaEmail) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Este email ja esta cadastrado em nossos registros');window.location.href='cadastrousu.php'</script>";
	}
		else{
			$tipo=2;
	$foto= "perfil.png";
    $result_usuario = "INSERT INTO usuarios (nome,email,celular,senha,foto,descricao, tipo) values ('$nome','$email','$celular','$senha','$foto','$descricao',2)"or die(mysqli_error($conn));
    $resultado_usuario = mysqli_query($conn, $result_usuario)or die(mysqli_error($conn));
    if(mysqli_affected_rows($conn) > 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='perfil.php'</script>";
                ;    
            }else{
                 echo "
                    <script language='javascript' type='text/javascript'> alert('Nao foi possivel cadastrar este usuario');window.location.href='cadastrousu.php'</script>"
                ;   
			}
			
			}
			;
		

?>