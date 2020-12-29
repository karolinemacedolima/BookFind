<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("conexao.php");    
    //O campo usuário e senha preenchido entra no if para validar
	
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $email = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($_POST['senha']);
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		
        $result_usuario = "SELECT * FROM adm WHERE email = '$email' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario) or die($conn);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
			$_SESSION['idusuario'] = $resultado['idadm'];
            $_SESSION['nome'] = $resultado['nome'];
			$_SESSION['email'] = $resultado['email'];
			$_SESSION['senha'] = $resultado['senha'];
			$_SESSION['foto'] = $resultado['foto'];
			 header("Location:perfiladm.php");
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{     echo "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos');window.location.href='indexsem.php'</script>";  
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    } 
	else{
       echo "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos');window.location.href='indexsem.php'</script>";
    }
	
		
?>