let maisLidas = document.getElementsByClassName("mais-lidas-unidade-categoria")

let btnAnteriorMaisLidas = document.getElementById("btn_anterior_mais_lidas")

let btnProximoMaisLidas = document.getElementById("btn_proximo_mais_lidas")

let maisLidasNaTela

let maxNoticias

let tempoRola

function carregarNoticia(noticia){
    if(screen.width <= 420){
        maisLidas[noticia].style.display = "inline"
        maisLidas[noticia+1].style.display = "inline"
        for(i=0;i<maisLidas.length;i++){
            if((maisLidas[i] != maisLidas[noticia])&&(maisLidas[i] != maisLidas[noticia+1])){
                maisLidas[i].style.display = "none"
            }
        }
    }else if(screen.width > 420 && screen.width <= 1024){
        maisLidas[noticia].style.display = "inline"
        maisLidas[noticia+1].style.display = "inline"
        maisLidas[noticia+2].style.display = "inline"
        for(i=0;i<maisLidas.length;i++){
            if((maisLidas[i] != maisLidas[noticia])&&(maisLidas[i] != maisLidas[noticia+1])&&(maisLidas[i] != maisLidas[noticia+2])){
                maisLidas[i].style.display = "none"
            }
        }
    }else{
        maisLidas[noticia].style.display = "inline"
        maisLidas[noticia+1].style.display = "inline"
        maisLidas[noticia+2].style.display = "inline"  
        maisLidas[noticia+3].style.display = "inline" 
        for(i=0;i<maisLidas.length;i++){
            if((maisLidas[i] != maisLidas[noticia])&&(maisLidas[i] != maisLidas[noticia+1])&&(maisLidas[i] != maisLidas[noticia+2])&&(maisLidas[i] != maisLidas[noticia+3])){
                maisLidas[i].style.display = "none"
            }
        }
    }
}

function iniciaRolagem(){
    maisLidasNaTela = 0
    maxNoticia = maisLidas.length-1
    carregarNoticia(maisLidasNaTela)
    tempoRola = 0
    animaRolagem()    
}

function rola(dir){
    tempoRola = 0
    maisLidasNaTela+=dir
    if(maisLidasNaTela>maxNoticias){
        maisLidasNaTela = 0
    }else if(maisLidasNaTela<0){
        maisLidasNaTela = maxNoticias
    }
    carregarNoticia(maisLidasNaTela)
}

function animaRolagem(){
    tempoRola++
    if(tempoRola >= 200){
        tempoRola = 0
        rola(1)
    }
}

btnProximoMaisLidas.onclick = function(){
    rola(1)
}

btnAnteriorMaisLidas.onclick = function(){
    rola(-1)
}
window.addEventListener("load",iniciaRolagem)