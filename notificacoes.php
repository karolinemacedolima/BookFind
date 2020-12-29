  <?php	
  include_once("conexao.php");
			session_start();
				$_SESSION['idusuario'];
	 $id_de = $_SESSION['idusuario'];
		$tipo_de=$_SESSION['tipo'];
                $chats = mysqli_query($conn,"SELECT * FROM notificacoes WHERE id_para = '$id_de' and tipo_para='$tipo_de' order by idnotificacoes asc");
  
				$ch=mysqli_num_rows($chats);
				if ($ch>0){
				
				}else{	
				$ch=0;}
				
                ?>
 
<style>


.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #dddd;
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

#logo img{
  width: 175px;	
  height: 100px;
  padding-left: 20px; 
  }

</style>

                
  
<a href="vernotificacoes.php" class="btn btn-default btn-lg">Você possui <?php echo $ch;?> novas mensagens</a>


