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
		
        $result_usuario = "SELECT * FROM insti WHERE email = '$email' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
			$_SESSION['idinsti'] = $resultado['idinsti'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['rua'] = $resultado['rua'];
			$_SESSION['bairro'] = $resultado['bairro'];
			$_SESSION['senha'] = $resultado['senha'];
			$_SESSION['numero'] = $resultado ['numero'];
			 header("Location:perfil.php");
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos')</script>";
            header("Location: logininsti.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }
	else{
        $_SESSION['loginErro'] = "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos')</script>";
        header("Location: logininsti.php");
    }
	
		
?>