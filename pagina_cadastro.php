<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Mochilheiros</title>
<!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.html" class="navbar-brand">Mochilão</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Início</a></li>
                    <li><a href="about.html">sobre</a></li>
                    <li><a href="gallery.html">Galeria</a></li>
                    <li><a href="gallery.html">Viagens</a></li>
                    <li><a href="contact.html">Dicas</a></li>
                    <li><a href="pagina_login.php"><font color="#00ffff">LOGING</font></a></li>
                    <li><a href="pagina_cadastro.php"><font color="#00ffff">CADASTRO</font></a></li>
               </ul>
          </div>

  </div>
</div>
<center <h2>CRIE SEU CADASTRO</h2></center>
	</div>
</div>
<?php
//if(insset($_SESSION['msg'])){
  //  echo $_SESSION['msg'];
    //unset($_SESSION['msg']);
//}
?>
    <form class="form-horizontal" name="form" method="POST" action="validacd.php">
<fieldset >


  

<!-- Text input-->
<center>
<div class="form-group">
    <label class="col-md-4 control-label" for="textinput" id="cor_nome">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="nome" type="text" placeholder="Insira seu nome completo" class="form-control input-md">
    
  </div>
</div>
</center>


<!-- Text input-->
<center>
<div class="form-group">
  <label class="col-md-4 control-label"  for="textinput" id="cor_nome">E-mail</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="Digite seu melhor e-mail" class="form-control input-md">
    
  </div>
</div>
</center>
<center>
<div class="form-group">
  <label class="col-md-4 control-label" name="senha" for="textinput" id="cor_nome">Senha</label>
  <div class="col-md-4">
  <input id="textinput" name="senha" type="password" placeholder="Digite sua senha" class="form-control input-md">
    
  </div>
</div>
</center>

<!-- Button -->
<center>
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="salvar"  class="btn btn-primary">Confirmar</button>
  </div>
</div>
</center>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>
</body>
</html> 