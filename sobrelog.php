<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="imagem/png" href="2lfg.png" />
<link rel="stylesheet" href="sobrelog.css">
<title>Sobre</title>
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
<li><a href="perfil.php" target="_self">Perfil</a></li>

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
  

</ul>


</div>
</div>

<div id="mapa">

<div id= "txtimg"> 

<a href="index.php" target="_self"><h1>Sobre o BookFind</h1></a>
</div>

<div class="desc">
<div id="img1desc">
<img src="instituicao.png">
</div>

<div id="img2desc">
<img src="pessoa.png">
</div>

<div id="img3desc">
<img src="mapaicone.png">
</div>

<br class="fix">
<br class="fix">

<div class="txtsobre">
<p>O BookFind é uma plataforma de mediação de trocas ou doações de livros, de instituições para pessoas físicas.</p>
<p>Visando a facilidade no acesso aos livros, o aumento de acervos literários e contribuir através do incentivo a leitura à formação do usuario</p>
</div>

</div>
</div>
</header>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">

<section>

<div class="coluna">
<div class="col1">

<br class="fix">
<br class="fix">
<br class="fix">

<div id= "img1">
<img src="icoobjb.png">

<div id="desc1">
<h1>Objetivo</h1>
</div>

<br class="fix">


</div>
<div id="txtd1">
<p>Aumento de acervos literários</p>
<p>Facilidade na doação de livros</p>
<p>Nova perspectiva sobre o ato de ler</p>
</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">

</div>

<div class="col2">
<br class="fix">
<br class="fix">
<br class="fix">

<div id= "img2">
<img src="icoint.png">

<div id="desc2">
<h1>O que fazemos?</h1>
</div>

<br class="fix">

</div>

<div id="txtd2">
<p>Mediação de troca ou doação de livros</p>
<p>Ambiente prático e dinâmico para doações ou trocas</p>
<p>Facilidade no contato com instituições</p>
</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">


</div>

<div class="col3">

<br class="fix">
<br class="fix">
<br class="fix">

<div id= "img3">
<img src="icovalb.png">

<div id="desc3">
<h1>Valores</h1>
</div>

<br class="fix">

</div>

<div id="txtd3">

<p>Incentivo ao hábito da leitura</p>
<p>Disseminação de conhecimento</p>
</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">

</div>
</div>

<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">
<br class="fix">


<div id="qstxt">
<h1>Quem Somos?</h1>
</div>

<br class="fix">
<br class="fix">



<div class="gallery">
  <div class="container">

    <img src="dani.jpg" class="image">
  <div class="middle">
    <div class="text">Danielly</div>
      </div>   
  </div> 
  </div>
  
  <div class="gallery">
  <div class="container">

    <img src="karol.jpg" class="image">
  <div class="middle">
    <div class="text">Karoline</div>
      </div>   
  </div> 
  </div>
  
  <div class="gallery">
  <div class="container">

    <img src="maria.jpg" class="image">
  <div class="middle">
    <div class="text">Maria Eduarda</div>
      </div>   
  </div> 
  </div>

</section>




<br class="fix">
<br class="fix">
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
