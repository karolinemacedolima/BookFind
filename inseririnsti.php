<?php

    include_once("conexao.php");

    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$complemento = $_POST['complemento'];
	$telefone = $_POST['celular'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$rua = $_POST['rua'];
	$cie = $_POST['cie'];
	$numero = $_POST['numero'];
	$senha = md5($_POST['senha']);
	$confirmasenha = md5($_POST['confirmasenha']);
	$tipo=1;
	$descricao="Personalize no editar dados";
	
			$pegaEmail = mysqli_query($conn, "SELECT * FROM insti WHERE email = '$email'");	
	
	if(mysqli_num_rows($pegaEmail) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Esta instituição ja esta cadastrado em nossos registros');window.location.href='indexsem.php'</script>";
	}
		else{
			$foto= "perfil.png";
			
    $resultado_usuario = mysqli_query($conn,"INSERT INTO insti (nome, email, telefone, estado, cidade, bairro, rua, numero, complemento, senha, confirmasenha,descricao, tipo, foto,cie) VALUES ('$nome','$email','$telefone','$estado','$cidade','$bairro','$rua','$numero','$complemento','$senha','$confirmasenha','$descricao','$tipo', '$foto','$cie')") or die($conn);
    
    if(mysqli_affected_rows($conn) > 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Instituição cadastrada com sucesso!');window.location.href='perfil.php'</script>"
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'> alert('Nao foi possivel cadastrar esta instituição')</script>"
                ;    
			}
			
			}
			;
		

?>