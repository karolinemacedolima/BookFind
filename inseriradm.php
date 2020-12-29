<?php

    include_once("conexao.php");

    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$confirmasenha = md5($_POST['confirmasenha']);

	
			$pegaEmail = mysqli_query($conn, "SELECT * FROM adm WHERE email = '$email'");	
	
	if(mysqli_num_rows($pegaEmail) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Este email ja esta cadastrado em nossos registros');window.location.href='indexsem.php'</script>";
	}
		else{
			$foto= "perfil.png";
			
    $resultado_usuario = mysqli_query($conn,"INSERT INTO adm (nome, email, senha, foto) VALUES ('$nome','$email','$senha', '$foto')") or die($conn);
    
    if(mysqli_affected_rows($conn) > 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='perfiladm.php'</script>"
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'> alert('Nao foi possivel cadastrar este usuario')</script>"
                ;    
			}
			
			}
			;
		

?>