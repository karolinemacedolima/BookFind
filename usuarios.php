<form method="POST" action="">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome"><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar">
		</form><br><br>
		
		<?php
		include_once ("conexao.php");
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM usuarios WHERE nome LIKE '%$nome%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "ID: " . $row_usuario['idusuario'] . "<br>";
				echo "Nome: " . $row_usuario['nome'] . "<br>";
				echo "E-mail: " . $row_usuario['email'] . "<br>";
				echo "<a href='perfilvisupes.php?id=" . $row_usuario['idusuario'] . "'>Perfil</a><br>";
	
			}
		}
		$SendPesqiUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqiUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM insti WHERE nome LIKE '%$nome%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "ID: " . $row_usuario['idinsti'] . "<br>";
				echo "Nome: " . $row_usuario['nome'] . "<br>";
				echo "E-mail: " . $row_usuario['email'] . "<br>";
				echo "<a href='perfilvisuinst.php?id=" . $row_usuario['idinsti'] . "'>Perfil</a><br>";
			
			}
		}
		?>
		