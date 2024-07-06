<?php

include('conexao.php');

if(!isset($_SESSION)){
    session_start();
}


if(isset($_POST['login']) && isset($_POST['senha'])){

    $erro = [];

    if(strlen($_POST['login']) > 21 || strlen($_POST['login']) < 1)
        $erro[] = "digite seu login corretamente!";
    
    // if(str_word_count($_POST['login']) < 2)
    //         $erro[] = "digite seu nome inteiro!";

    // if(strlen($_POST['login']) > 80)
    //         $erro[] = "nome muito grande!";

    if(strlen($_POST['senha']) < 4 || strlen($_POST['senha']) > 8)
            $erro[] = "senha tem que ter entre 4 á 8 caracteres!";


    if(count($erro) == 0){

        $login = $_POST['login'];
        $senha = $_POST['senha'];


        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");//preparando a consulta
        $stmt->bind_param("ss", $login, $senha);//ss = strings, e as variaveis que vão substituir o ?
        $stmt->execute();

        //btem o resultado e coloca em uma variavel
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            echo "dados conferidos com sucesso, login efetuado";

            $_SESSION['login'] = $login;
            
            header('Location: index.php');
        }

        echo "dados conferidos<br>";
}




print_r($erro);







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

    <form action="login.php" method="POST">

    <div class="input-container">
        <h1>login</h1><br>
        <input type="text" name="login" required> <br><br><br>
    
        <h1>senha</h1><br>
        <input type="password" name="senha" required class="espaco">

        <div class='botao1'>
            <button type="submit" class="btn-entrar">ENTRAR</button>
            <a href="cadastro.php"class="btn-entrar1">CADASTRO</a>
        </div>
        
    </div>

   

 </form>



</div>
</div><!--login-->





<script src="./script/nftT.js"></script>
<script src="./script/principal.js"></script>
</body>
</html>