<?php

if(!isset($_SESSION)){
    session_start();
}

$perfil = "PERFIL";


if(isset($_SESSION['login'])){
    $perfil = $_SESSION['login'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
<!-- CSS -->
 <link rel="stylesheet" href="./css/principal.css">
 <!-- font racing -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="flex">
            <h1>NFT <span>NOVA ERA</span></h1>

            <div id="navegation">
                <ul id='descktop' >

                    <li><a href="#populares">POPULARES</a></li>
                    <li onclick="carteira()" class="c">CARTEIRA</li>
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
                        <a href="" class="perfil"><?php echo $perfil; ?></a>
                    </div>

                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="" >CARTEIRA</a></li>
                    <li><a href="">MEUS UATS</a></li>
                    <li><a href=""><button class="contatos" id="btn-contatos">CONTATOS</button></a></li>
                </ul>

            </div><!--navegation-->

            <button id='btn-mobile'>menu</button>

        </div>
    </nav>
    <section class="ladding-page" id="descktop">

    <h1>🖼️🚀 Descubra a Arte do Futuro <BR></BR> com Nossos NFTs Exclusivos! 🚀🖼️</h1>

    <h2>A partir de apenas R$ 180,00 </h2>

    <p>Seja parte de uma revolução criativa. Cada peça é única e registrada na blockchain, garantindo autenticidade e propriedade. Não perca a oportunidade de colecionar algo verdadeiramente <br> inovador e 
    valioso!</p>

<div class="ladding-page-button">
    <button class="carteira">CARTEIRA</button>
    <BUTTon class="contatos">CONTATOS</BUTTon>
</div>

    </section><!--ladding-page-->

    <section class="container-nft">
        <div class="interface">
            <div class="alinhar">
            <div class="flex" id="nft-destaque">

                <div class="card-nft">
                    <div class="imagem-nft"><img src="https://i.pinimg.com/originals/df/f1/a8/dff1a8fc72d5d433fa25e857dbe05c58.jpg" alt=""></div>

                    <div class="informacoes-nft">
                        <h1>GATOD</h1>
                        <h3>???</h3>
                    </div>

                    <div class="desc"></div>

                    <div class="preco"><h1>BRL 700,00</h1></div>

                </div><!--card-nft-->

                <div class="card-nft">
                    <div class="imagem-nft"><img src="https://i.pinimg.com/originals/89/f3/bb/89f3bb77bae5c3f07067a8be6024719d.jpg" alt=""></div>

                    <div class="informacoes-nft">
                        <h1>GATOD</h1>
                        <h3>???</h3>
                    </div>

                    <div class="desc"></div>

                    <div class="preco"><h1>BRL 700,00</h1></div>

                </div><!--card-nft-->


                <div class="card-nft" id="descktop1">
                    <div class="imagem-nft"><img src="https://i.pinimg.com/736x/44/fb/36/44fb3652f65e833fa74bbe73a53d785b.jpg" alt=""></div>

                    <div class="informacoes-nft">
                        <h1>GATOD</h1>
                        <h3>???</h3>
                    </div>

                    <div class="desc"></div>

                    <div class="preco"><h1>BRL 700,00</h1></div>

                </div><!--card-nft-->
            </div><!--flex--> 
            </div><!--alinhar-->
            <div class="alinhar"><h1 id="populares">POPULARES <br> <span>NO MOMENTO!</span> </h1></div> 
        </div><!--interface-->
          
        <div class="interface">
                <div class="alinhar">
                    <div class="grid-nft">







                    </div>
            </div><!--alinhar-->
        </div><!--interface-->
    </section><!--container-nft-->

<section class="footer">
    <div class="imagem-footer"><img src="./img/Vector 26.png" alt=""></div>

    <h1 id='logo'>NFT <span>NOVA ERA</span></h1>
    <div class="alinhar">
    

    

        <div class="sociais">
            
                <li>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M16,3c-7.17,0 -13,5.83 -13,13v18c0,7.17 5.83,13 13,13h18c7.17,0 13,-5.83 13,-13v-18c0,-7.17 -5.83,-13 -13,-13zM37,11c1.1,0 2,0.9 2,2c0,1.1 -0.9,2 -2,2c-1.1,0 -2,-0.9 -2,-2c0,-1.1 0.9,-2 2,-2zM25,14c6.07,0 11,4.93 11,11c0,6.07 -4.93,11 -11,11c-6.07,0 -11,-4.93 -11,-11c0,-6.07 4.93,-11 11,-11zM25,16c-4.96,0 -9,4.04 -9,9c0,4.96 4.04,9 9,9c4.96,0 9,-4.04 9,-9c0,-4.96 -4.04,-9 -9,-9z"></path></g></g>
                        </svg>
                </li>

                <li>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M41,4h-32c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM17,20v19h-6v-19zM11,14.47c0,-1.4 1.2,-2.47 3,-2.47c1.8,0 2.93,1.07 3,2.47c0,1.4 -1.12,2.53 -3,2.53c-1.8,0 -3,-1.13 -3,-2.53zM39,39h-6c0,0 0,-9.26 0,-10c0,-2 -1,-4 -3.5,-4.04h-0.08c-2.42,0 -3.42,2.06 -3.42,4.04c0,0.91 0,10 0,10h-6v-19h6v2.56c0,0 1.93,-2.56 5.81,-2.56c3.97,0 7.19,2.73 7.19,8.26z"></path></g></g>
                        </svg>
                </li>

                <li>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M17.791,46.836c0.711,-0.306 1.209,-1.013 1.209,-1.836v-5.4c0,-0.197 0.016,-0.402 0.041,-0.61c-0.014,0.004 -0.027,0.007 -0.041,0.01c0,0 -3,0 -3.6,0c-1.5,0 -2.8,-0.6 -3.4,-1.8c-0.7,-1.3 -1,-3.5 -2.8,-4.7c-0.3,-0.2 -0.1,-0.5 0.5,-0.5c0.6,0.1 1.9,0.9 2.7,2c0.9,1.1 1.8,2 3.4,2c2.487,0 3.82,-0.125 4.622,-0.555c0.934,-1.389 2.227,-2.445 3.578,-2.445v-0.025c-5.668,-0.182 -9.289,-2.066 -10.975,-4.975c-3.665,0.042 -6.856,0.405 -8.677,0.707c-0.058,-0.327 -0.108,-0.656 -0.151,-0.987c1.797,-0.296 4.843,-0.647 8.345,-0.714c-0.112,-0.276 -0.209,-0.559 -0.291,-0.849c-3.511,-0.178 -6.541,-0.039 -8.187,0.097c-0.02,-0.332 -0.047,-0.663 -0.051,-0.999c1.649,-0.135 4.597,-0.27 8.018,-0.111c-0.079,-0.5 -0.13,-1.011 -0.13,-1.543c0,-1.7 0.6,-3.5 1.7,-5c-0.5,-1.7 -1.2,-5.3 0.2,-6.6c2.7,0 4.6,1.3 5.5,2.1c1.699,-0.701 3.599,-1.101 5.699,-1.101c2.1,0 4,0.4 5.6,1.1c0.9,-0.8 2.8,-2.1 5.5,-2.1c1.5,1.4 0.7,5 0.2,6.6c1.1,1.5 1.7,3.2 1.6,5c0,0.484 -0.045,0.951 -0.11,1.409c3.499,-0.172 6.527,-0.034 8.204,0.102c-0.002,0.337 -0.033,0.666 -0.051,0.999c-1.671,-0.138 -4.775,-0.28 -8.359,-0.089c-0.089,0.336 -0.197,0.663 -0.325,0.98c3.546,0.046 6.665,0.389 8.548,0.689c-0.043,0.332 -0.093,0.661 -0.151,0.987c-1.912,-0.306 -5.171,-0.664 -8.879,-0.682c-1.665,2.878 -5.22,4.755 -10.777,4.974v0.031c2.6,0 5,3.9 5,6.6v5.4c0,0.823 0.498,1.53 1.209,1.836c9.161,-3.032 15.791,-11.672 15.791,-21.836c0,-12.682 -10.317,-23 -23,-23c-12.683,0 -23,10.318 -23,23c0,10.164 6.63,18.804 15.791,21.836z"></path></g></g>
                        </svg>

                </li>




        </div>
    </div><!--alinhar-->
</section>

<div id="mostrar-card">
    <div class="windown">

        <div class="card-fechar">
                <div class='fechar'>
                    <svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="140" height="140" viewBox="0,0,256,256">
                    <g fill="#1900b1" fill-rule="nonzero" stroke="black" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.55556,3.55556)"><path d="M36,12c13.255,0 24,10.745 24,24c0,13.255 -10.745,24 -24,24c-13.255,0 -24,-10.745 -24,-24c0,-13.255 10.745,-24 24,-24zM40.243,44.485c1.171,1.171 3.071,1.172 4.243,0c1.172,-1.172 1.171,-3.071 0,-4.243c-0.233,-0.232 -2.423,-2.422 -4.243,-4.242c1.82,-1.82 4.01,-4.01 4.243,-4.243c1.171,-1.171 1.172,-3.071 0,-4.243c-1.171,-1.171 -3.071,-1.171 -4.243,0c-0.233,0.233 -2.423,2.423 -4.243,4.243c-1.82,-1.82 -4.01,-4.01 -4.243,-4.243c-1.171,-1.171 -3.071,-1.172 -4.243,0c-1.172,1.172 -1.171,3.071 0,4.243c0.232,0.232 2.423,2.423 4.243,4.243c-1.82,1.82 -4.01,4.01 -4.243,4.243c-1.171,1.171 -1.171,3.071 0,4.243c1.172,1.172 3.071,1.171 4.243,0c0.232,-0.232 2.423,-2.423 4.243,-4.243c1.82,1.82 4.01,4.01 4.243,4.242z"></path></g></g>
                    </svg>
                </div>

        </div>

        <div class="card-nft">
                    <div class="imagem-nft"><img src="https://i.pinimg.com/originals/df/f1/a8/dff1a8fc72d5d433fa25e857dbe05c58.jpg" alt=""></div>

                    <div class="informacoes-nft">
                        <h1>GATOD</h1>
                        <h3>???</h3>
                    </div>

                    <div class="desc"><h4>eee</h4></div>

                    <div class="preco"><h1>BRL 700,00</h1></div>

        </div><!--card-nft-->
    </div><!--windown-->
</div>

<div class="windown-carteira">

        
                

    <div class="container-carteira">



        <div class="carteira-bloco">

       

            <div class="conta-carteira">

                <div class="flex">
                    <div class="imagem-carteira"><img src="./img/usu.jpg" alt=""></div>
                    <div class="nome-carteira"><h1><?php echo $perfil; ?></h1></div>
                    <div class='fechar2'>
                    <svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="90" height="90" viewBox="0,0,256,256">
                    <g fill="#1900b1" fill-rule="nonzero" stroke="black" stroke-width="2" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.55556,3.55556)"><path d="M36,12c13.255,0 24,10.745 24,24c0,13.255 -10.745,24 -24,24c-13.255,0 -24,-10.745 -24,-24c0,-13.255 10.745,-24 24,-24zM40.243,44.485c1.171,1.171 3.071,1.172 4.243,0c1.172,-1.172 1.171,-3.071 0,-4.243c-0.233,-0.232 -2.423,-2.422 -4.243,-4.242c1.82,-1.82 4.01,-4.01 4.243,-4.243c1.171,-1.171 1.172,-3.071 0,-4.243c-1.171,-1.171 -3.071,-1.171 -4.243,0c-0.233,0.233 -2.423,2.423 -4.243,4.243c-1.82,-1.82 -4.01,-4.01 -4.243,-4.243c-1.171,-1.171 -3.071,-1.172 -4.243,0c-1.172,1.172 -1.171,3.071 0,4.243c0.232,0.232 2.423,2.423 4.243,4.243c-1.82,1.82 -4.01,4.01 -4.243,4.243c-1.171,1.171 -1.171,3.071 0,4.243c1.172,1.172 3.071,1.171 4.243,0c0.232,-0.232 2.423,-2.423 4.243,-4.243c1.82,1.82 4.01,4.01 4.243,4.242z"></path></g></g>
                    </svg>
                </div><!--fechar-->
                </div><!--flex-->

                <div class="conta">(BRL)<h2>R$ 1.000,00</h2></div>

                <div class="alinhar-botao">
                    <button class="btn-carteira">
                       <img src="./img/addw.png" alt="">
                    </button>
                    <button class="btn-carteira">
                     <img src="./img/money-bag.png" alt="">
                    </button>
                    <button class="btn-carteira">
                    <img src="./img/bitcoin.png" alt="">
                    </button>
                </div><!--alinhar-botao-->
            </div><!--conta-carteira-->
              
                 <div class="alinhar-extrato">
                        <h1>Extrato</h1>

                        <div class="container-extrato">

                        </div><!--container-extrato--> <br><br>

                        <div class="container-extrato">

</div><!--container-extrato--> <br><br>

                        <div class="container-extrato">

                        </div><!--container-extrato-->
                </div>

        </div><!--carteira-->
    </div><!--container-carteira-->
</div>

    <script src="./script/nftT.js"></script>
    <script src="./script/inicio.js"></script>
</body>
</html>

