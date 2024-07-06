
<?php
if(!isset($_SESSION)){
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/principal-style.css">
    <link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>
    
<nav>
        <div class="flex">
           <a href="index.php"><h1>NFT <span>NOVA ERA</span></h1></a> 

            <div id="navegation">
                <ul id='descktop' >

                    <a href=""><button class="contatos">CONTATOS</button></a>
                    <li onclick="abrirMenu()">
                    
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0,0,256,256" 
                        style="fill:#228BE6;">
                        <g fill="#1900b1" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M5,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z"></path></g></g>
                        </svg>
                    
                </li>
                </ul>

                <ul id="menu"><!--mobile-->
                    
                    <div class="alinhar" id='alinhar'>
                        <img src="./img/usu.jpg" class="imagem-usuario">
                        <a href="" class="perfil">PERFIL</a>
                    </div>

                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="">CARTEIRA</a></li>
                    <li><a href="">MEUS UATS</a></li>
                    <li><a href=""><button class="contatos" id="btn-contatos">CONTATOS</button></a></li>
                </ul>

            </div><!--navegation-->

            <button id='btn-mobile'>menu</button>

        </div>
</nav>

<div class="login">
 <div class="login-container">
<h2>NFT <span>NOVA ERA</span></h2>

    <form action="cadastro.php" method="POST">

    <div class="input-container">

       <h1>nome</h1><br>
        <input type="text" name="nome" required><br><br><br>

        <h1>login</h1><br>
        <input type="text" name="login" required> <br><br><br>
    
        <h1>senha</h1><br>
        <input type="password" name="senha" required><br><br><br>

        <h1>repetir a senha</h1><br>
        <input type="password" name="senha-r" required>






        <div class='botao1'>
            <button type="submit" class="btn-entrar">CADASTRAR</button>
            <a href="login.php" class="btn-entrar1">LOGIN</a>
        </div>
        
    </div>

   

 </form>



</div>
</div><!--login-->





<script src="./script/nftT.js"></script>
<script src="./script/principal.js"></script>
</body>
</html>

<?php

if(isset($_POST['nome']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['senha-r'])){
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $senhar = $_POST['senha-r'];

    unset($erro);//limpar o array
    $erro = [];

if(str_word_count($nome) < 2)
    $erro[] = "digite seu nome inteiro!";

if(strlen($login) > 30)
    $erro[] = "login muito grande!";

if(strlen($senha) < 4 || strlen($senha) > 8)
    $erro[] = "A senha deve conter entre 4 á 8 caracteres!";

if($senha !== $senhar)
    $erro[] = "senhas diferentes!";

    print_r($erro);



if(count($erro) == 0){
include('conexao.php');


$sql = "INSERT INTO usuarios (nome, login, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql); //prepara a consulta sql de forma segura
$stmt->bind_param("sss", $nome, $login, $senha);//passando os parametros da consulta

  if($stmt->execute()){//verifica se a consulta deu certo
    echo "Cadastro feito com sucesso!";
  }else{
    echo "ERRO: " . $sql . "<br>" . $conn->error;//mostrar o erro que aconteceu
  }

$stmt->close();
$conn->close();

}

}


?>