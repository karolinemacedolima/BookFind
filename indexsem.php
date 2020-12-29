
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcuticon" type="image/png" href="" >
<link rel="icon" type="imagem/png" href="2lfg.png" />
<link rel="stylesheet" href="bookfindindex.css">
<title>Book Find</title>
</head>

<body>

<header class="cabecalho">

<div id="logo">
<a href="index.php" target="_self"><img src="2lfg.png"></a>
</div>

<div class="barramenu">

<div id="menu">
<ul>

<li><a href="sobre.php" target="_self">Sobre</a></li>
<li><a href="index.php#titulocf" target="_self">Como funciona?</a></li>

<li><a href="instituicoes.php" target="_self">Instituições</a></li>
<li><a href="javascript:void(0)" class="dropbtn" id="myBtn">Login</a>
    
      
      <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<div id="titulo">
    <legend align ="center">Login</legend>	
    </div>
	</div>
	<div id= "form">
<form method="POST" action="valida.php">

<br><br>
<label>Email:</label><input type="email"  name="email" required id="email"><br><br>
<label>Senha:</label><input type="password" name="senha" required id="senha"><br><br>

<input type="submit" value="Logar" id="logar" name="logar"> <br><br>

<a href="cadastrousu.php">Não possui login? Cadastre-se como usuario</a>
<a href="cadastroinsti.php">Cadastre-se como instituição</a>
</form>
</div>

</br>



  </div>


</li>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<li class="submenu">	
	<a href="javascript:void(0)" class="dropbtn">Cadastro</a>
    <div class="dropdown-content">
      <a href="cadastroinsti.php">Instituições</a>
      <a href="cadastrousu.php">Pessoas</a>
    </div>
  </li>
<style>

.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 55%;
  top: 0;
  width: 10%; /* Full width */
  height: 10%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content2 {
  position: fixed;
  
  bottom: 600;
   height: 1.0%;
  width: 50%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close2 {
  color: #fefefe;

  font-size: 28px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}

.modal-header2 {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body2 {padding: 2px 16px;}

.modal-footer2 {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {right: -300px; opacity: 0} 
  to {right: 0; opacity: 1}
}

@keyframes slideIn {
  from {right: -300px; opacity: 0}
  to {right: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}
</style>  
  <li><a ><img src="lupa.png" width='30px' height='30px'id="myBtn2"></a></li>

<!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <div class="modal-body2"> <span class="close2">&times;</span>
<form method="POST" action="busca.php">
<input type="text"  name="busca" required id="busca" placeholder="Busque o livro pelo titulo ou autor"  style="width: 75%; ">
<input type="submit" style="width: 10%; padding: 1px ;" >
</form>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal2.style.display = "none";
  }
}
</script>



</div>
</div>


<div id="mapa">

<div id= "txtimg"> 

<a href="index.php" target="_self"><h1>BookFind</h1></a>

</div>
<div id="desc">

<button class="button">
<span><a href="mapa.php" target="_self">Encontre o livro mais próximo!</a></span>
</button>

</div>
</div>

</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">

</header>



<section>
<div id="titulocf">
<p>Como Funciona?</p>
</div>

<div id="desccf">
<p>O Bookfind é uma plataforma acessível para a doação ou troca de livros!</p> 
</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">

<div class="txtfunc1">
<img src="iconepessoa.png">

<p>Caso você seja um doador cadastrado, você pode localizar a instituição receptora de livros mais próxima, entrar em contato e sanar as dúvidas sobre a troca ou doação com a mesma!</p>
</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">



<div class="textos">
<div class="txtfunc2">
<img src="iconeinst.png">
<p>Caso você seja uma instituição, você se cadastrar como receptora de livros, entrar em contato com os doadores para receber o livro ou estabelecer uma troca ou doação de livros caso ambos estejam interessados!
</p>
</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">

<div class="txtfunc3">
<img src="iconelivro.png">
<p>A leitura é responsável por contribuir, de forma significativa, à formação do indivíduo, através dela podemos conhecer as culturas fora da nossa bolha social. Com ela o senso crítico do leitor se torna melhor, pois ele passa a analisar de forma mais racional os fatos que ocorrem, tendo a sua própria opinião, evitando a alienação.</p>
</div>
</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">

<div id="implei">
<p>“A leitura é muito importante para o crescimento do indivíduo, e o incentivo dela precisa ser maior na educação pública brasileira.”(BARATTIERI, ALLAN)</p>
</div>

</section>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">

<footer>

<div class="rod">
<div class="social">

<div id="contato">
<h1>Contato</h1>
</div>

<div class="img1">
<img src="fbb.png" >
<div id="txtsoc1">
<a href=".html" target="_self">/bookfind</a>
</div>
</div>

<div class="img2">
<img src="instab.png" >
<div id="txtsoc2">
<a href=".html" target="_self">@bookfind</a>
</div>
</div>

<div class="img3">

<img src="ttb.png">
<div id="txtsoc3">
<a href=".html" target="_self">@bookfind</a>
</div>
</div>

</div>
</div>

</footer>


</body>
</html>
