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
        $resultado_usuario = mysqli_query($conn, $result_usuario) or die($conn);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
			$_SESSION['idusuario'] = $resultado['idinsti'];
            $_SESSION['nome'] = $resultado['nome'];
			$_SESSION['email'] = $resultado['email'];
			$_SESSION['senha'] = $resultado['senha'];
			$_SESSION['estado'] = $resultado['estado'];
			$_SESSION['cidade'] = $resultado['cidade'];
            $_SESSION['rua'] = $resultado['rua'];
			$_SESSION['bairro'] = $resultado['bairro'];
			$_SESSION['senha'] = $resultado['senha'];
			$_SESSION['numero'] = $resultado ['numero'];
			$_SESSION['complemento'] = $resultado['complemento'];
			$_SESSION['telefone'] = $resultado['telefone'];
			$_SESSION['foto'] = $resultado['foto'];
			$_SESSION['descricao']=$resultado['descricao'];
			$_SESSION['tipo']=$resultado['tipo'] ;
			 header("Location:perfilinst.php");
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
		   $result_usuario = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario) or die($conn);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
			$_SESSION['idusuario'] = $resultado['idusuario'];
            $_SESSION['nome'] = $resultado['nome'];
			$_SESSION['email'] = $resultado['email'];
			$_SESSION['senha'] = $resultado['senha'];
            $_SESSION['celular'] = $resultado['celular'];
			$_SESSION['foto'] = $resultado['foto'];
				$_SESSION['descricao']=$resultado['descricao'];
			$_SESSION['tipo']= $resultado['tipo'];
			 header("Location:perfilusu.php");
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
           echo "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos');window.location.href='indexsem.php'</script>";
        }
		     
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    } 
	else{
       echo "<script language='javascript' type='text/javascript'>alert('Usuário ou senha Inválidos');window.location.href='indexsem.php'</script>";
    }
	
		
?>