  <?php	
  include_once("conexao.php");
			session_start();
				$_SESSION['idusuario'];
	 $id_de = $_SESSION['idusuario'];
	  $id_para=$_GET['id'];
	  $tipo_para=$_GET['tipo_para'];
		$tipo_de=$_SESSION['tipo'];
                $chats = mysqli_query($conn,"SELECT * FROM chat WHERE id_de = '$id_de' AND id_para = '$id_para' OR id_para = '$id_de' AND id_de = '$id_para' order by idchat asc");
                while($ch = mysqli_fetch_array($chats)) { 
                  if($ch['id_de'] == $id_de) {$var = $id_de;} else {$var = $id_para;}         
if ($ch['tipo_de']==2 ){
	$usere = mysqli_query($conn, "SELECT * FROM usuarios  WHERE idusuario = '$var'");
$us = mysqli_fetch_array($usere);
} if ($ch['tipo_de']==1 ) { 
                  $usere = mysqli_query($conn, "SELECT * FROM insti  WHERE idinsti = '$var'");
                 $us = mysqli_fetch_array($usere);
			

}  
                ?>
 
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

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

                <?php if ($ch['id_para'] == $id_de and $ch['tipo_para']== $tipo_de){ ?>
<div class="container">
 <img src="img/<?php echo $us['foto']; ?>" class="left" style="width:100%;">
  <span  class="right" style="width:100%; "><?php echo $us['nome'] ; ?></span>
  <p class="right" style="width:100%;"><?php echo $ch['mensagem']; ?></p>
  <span class="time-right"><?php echo formatarHora ($ch['hora']);?></span>
  
</div>
                <?php } else if ($ch['id_para'] == $id_para and $ch['tipo_para']==$tipo_para) { ?>
<div class="container darker">
  <img src="img/<?php echo $us['foto']; ?>" class="right" style="width:100%;">
  <span  class="left" style="width:100%;"><?php echo $us['nome'] ; ?></span>
  <p class="left" style="width:100%;"><?php echo $ch['mensagem']; ?></p>
  <span class="time-left"><?php echo formatarHora ($ch['hora']);?></span>
</div>
               
			   
                <?php } ?>
  

				<?php } ?>


