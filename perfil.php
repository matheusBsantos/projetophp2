<html ="en">
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
    </head>
    <body>
<center id="cor_nome"><h2>PERFIS</h2></center><br>
<?php
   
    //conectando ao Banco de Dados
    $local_servidor = "localhost";
    $nome_usuario = "root";
    $senha_usuario = ""; 
    $nome_base_dados = "cadastro";
    $conecta = new mysqli($local_servidor,$nome_usuario,$senha_usuario,$nome_base_dados);
    if ($conecta->connect_error) {
        die("Conexão falhou: " . $conecta->connect_error."<br>");
    }
    //pesquisando dados 
    
    
  
    $sql = "SELECT * FROM usuarios";
    $resultado = $conecta->query($sql); 
    if ($resultado->num_rows > 0) { 
        while($linha = $resultado->fetch_assoc()) { 
           
            echo "<center>Nome= ". $linha["nome"]."<br></center>  <center>E-mail= ". $linha["email"]."<br></center> <center>Senha = ". $linha["senha"]."<br></center><center><br>."; 
        
            
        }   
        
    } 
    else { 
        echo "<script>
                alert('Usuário não encontrado');
                window.location.href = 'pesquisar.html';
            </script>";
    }
    $conecta->close();
?>

<center>  <a href="attusuario.php">Atualizar perfil</a><br></center><br>
<center>  <a href="excluirusuario.php">Excluir perfil</a><br></center><br



</body>
</html>