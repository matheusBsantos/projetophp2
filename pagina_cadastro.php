<html>
    <head>
        
    </head>
    
</html> 
<body>
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
</body>
</html> 