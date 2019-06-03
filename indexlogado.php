<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        session_start();//Inicia uma nova sessão ou resume uma sessão existente
        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();//remove todas as variáveis de sessão
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'pagina_login.php';
                </script>";
        }
        $logado = $_SESSION['email'];
        ?>

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
                    <li><a href="perfil.php"><font color="#00ffff">PERFIL</font></a></li>
                    <li><a href="logout.php"><font color="#00ffff">LOGOUT</font></a></li>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Bem vindo!ao mundo dos mochilheiros.</h1>
                    <h4>Rotas de algumas pessoas,dicas para os mochilhões e algumas imagens para te motivar</h4>
                    <a href="#blog" class="smoothScroll btn btn-default">Mais</a>
               </div>

          </div>
     </div>
</section>

<!-- Blog Section -->
<div class="blog-post-thumb">
                         <div class="blog-post-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j9MQUvhoaeY" allowfullscreen></iframe>
                              </div>
                         </div>
    <center><h1>Dicas</h1>
    </center>
<section id="blog">
     <div class="container">
          <div class="row">

               
                    

                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="images/blog-image4.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                       
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              <a href="single-post.html" class="btn btn-default">Continue Reading</a>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>Mochilão</h3>
                    <p>“Eu Sempre Me Pergunto Porque Os Pássaros Estão Sempre No Mesmo Lugar Se Podem Voar Pra Qualquer Lugar Do Mundo. Aí Eu Me Faço A Mesma Pergunta.” – Harun Yahya.</p>
                    <div class="footer-copyright">
                         <p>MCHLS &copy; 2019 </p>
                    </div>
               </div>

               <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <h3>Contato</h3>
                    <p><i class="fa fa-globe"></i> Brasil</p>
                    <p><i class="fa fa-phone"></i> +55 9999-9999</p>
                    <p><i class="fa fa-save"></i> mochileirosaword@company.com</p>
               </div>

               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>

               <div class="col-md-12 col-sm-12">
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
               
          </div>
     </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>