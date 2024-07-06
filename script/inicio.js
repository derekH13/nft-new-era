// ================= MODAL GERAL ==========================
 const btnMobile = document.getElementById('btn-mobile');

function abrirMenu(){
    console.log('dssssssssssd');
    const nav = document.getElementById('navegation');
    nav.classList.toggle('active');//toggle significa ative caso não tenha ou desative caso ja tenha
    
}

btnMobile.addEventListener('click', abrirMenu);














const preencherDados = ( nftItem, item, index) => {

    nftItem.setAttribute('data-key', index);
    nftItem.querySelector('.imagem-nft img').src = item.img;
    nftItem.querySelector('.informacoes-nft h1').innerHTML = item.name;
    nftItem.querySelector('.informacoes-nft h3').innerHTML = item.raridade;
    nftItem.querySelector('.preco h1').innerHTML = item.price;

}

const MostrarCard = () => {
const mostrar = document.getElementById('mostrar-card');
mostrar.classList.add('visivel');

}

document.querySelector('.card-fechar').addEventListener('click', () => {
    const mostrar = document.getElementById('mostrar-card');
    mostrar.classList.remove('visivel');
})




const Card = (nftItem, item, index) => {

    var x = nftItem.getAttribute('data-key');
    var v = +x;
    const y = v;
console.log(y);



   document.querySelector('.windown .card-nft .imagem-nft img').src = nft_conteudoJson[y].img;
   document.querySelector('.windown .card-nft .informacoes-nft h1').innerHTML = nft_conteudoJson[y].name;
   document.querySelector('.windown .card-nft .informacoes-nft h3').innerHTML = nft_conteudoJson[y].raridade;
   document.querySelector('.windown .card-nft .preco h1').innerHTML = nft_conteudoJson[y].price;
   document.querySelector('.windown .card-nft .desc h4').innerHTML = nft_conteudoJson[y].desc;
}
















// =============== objeto nft ===========================================================

nft_conteudoJson.map((item, index) => {

let nftItem = document.querySelector('#nft-destaque .card-nft').cloneNode(true);//cria clodes para a variavel nftItem
document.querySelector('.grid-nft').append(nftItem);//escolhe o grid-nft e injeta o valor da variavel

preencherDados(nftItem, item, index);



// ================== AO CLICAR =================================


nftItem.addEventListener('click', () => {

MostrarCard(nftItem, item, index);

Card(nftItem, item, index);









})




    
})



// =========================== carteira ================================================

var saldoBancario = 1000;




const btnCarteira = document.querySelector('.carteira');
btnCarteira.addEventListener('click', () => {

    const modalCarteira = document.querySelector('.windown-carteira');

    carteira();

    mostrarSaldo(saldoBancario);

 
    

// ===================fechar ===================

    const fecharC = document.querySelector('.fechar2');
   
const adicionar = document.getElementById('adicionar');
adicionar.addEventListener('click', () => {

document.querySelector('.container-add').style.visibility = "visible";    
})   
});


const depositar = document.querySelector('.depositar');
    depositar.addEventListener('click', () => {
        
        var val = document.querySelector(".alinhar-depositar input").value;
        var x = +val;
        console.log(x);
        document.querySelector('.container-add').style.visibility = "hidden";
        let y = val.length;

        conferir(y, x);


    });







function carteira(){

const modalCarteira = document.querySelector('.windown-carteira');
modalCarteira.classList.add('active');

const fecharC = document.querySelector('.fechar2');
fecharC.addEventListener('click', () => { 
modalCarteira.classList.remove('active');

       
    })

}

function conferir(y, x){
    console.log('cga')
    if(y < 7){

        document.querySelector('.erro-depositar').style.visibility = "hidden";
            modificarSaldo(x);

            
    }else{
        document.querySelector('.erro-depositar').style.visibility = "visible";
        console.log('deu erro');
    }
}









function modificarSaldo(valor){
console.log('modificar')
    let g = valor;
saldoBancario += g;

mostrarSaldo(saldoBancario);
}



function mostrarSaldo(x){
       
    const saldo = document.querySelector('.conta h2');
    saldo.innerHTML = "R$ " + x;//colocar outra variavel com pontos e virgulas no saldo  


}



