let ultimasNoticias = document.getElementsByClassName("noticia")

let btnAnteriorUltimas = document.getElementById("btn_anterior_ultimas")

let btnProximoUltimas = document.getElementById("btn_proximo_ultimas")

let ultimasNoticiasNaTela

let maxNoticias

let tempoRola

function carregarNoticia(noticia){
    if(screen.width <= 420){
        ultimasNoticias[noticia].style.display = "inline"
        ultimasNoticias[noticia+1].style.display = "inline"
        for(i=0;i<ultimasNoticias.length;i++){
            if((ultimasNoticias[i] != ultimasNoticias[noticia])&&(ultimasNoticias[i] != ultimasNoticias[noticia+1])){
                ultimasNoticias[i].style.display = "none"
            }
        }
    }else if(screen.width > 420 && screen.width <= 1024){
        ultimasNoticias[noticia].style.display = "inline"
        ultimasNoticias[noticia+1].style.display = "inline"
        ultimasNoticias[noticia+2].style.display = "inline"
        for(i=0;i<ultimasNoticias.length;i++){
            if((ultimasNoticias[i] != ultimasNoticias[noticia])&&(ultimasNoticias[i] != ultimasNoticias[noticia+1])&&(ultimasNoticias[i] != ultimasNoticias[noticia+2])){
                ultimasNoticias[i].style.display = "none"
            }
        }
    }else{
        ultimasNoticias[noticia].style.display = "inline"
        ultimasNoticias[noticia+1].style.display = "inline"
        ultimasNoticias[noticia+2].style.display = "inline"  
        ultimasNoticias[noticia+3].style.display = "inline" 
        for(i=0;i<ultimasNoticias.length;i++){
            if((ultimasNoticias[i] != ultimasNoticias[noticia])&&(ultimasNoticias[i] != ultimasNoticias[noticia+1])&&(ultimasNoticias[i] != ultimasNoticias[noticia+2])&&(ultimasNoticias[i] != ultimasNoticias[noticia+3])){
                ultimasNoticias[i].style.display = "none"
            }
        }
    }
}

function iniciaRolagem(){
    ultimasNoticiasNaTela = 0
    maxNoticia = ultimasNoticias.length-1
    carregarNoticia(ultimasNoticiasNaTela)
    tempoRola = 0
    animaRolagem()    
}

function rola(dir){
    tempoRola = 0
    ultimasNoticiasNaTela+=dir
    if(ultimasNoticiasNaTela>maxNoticias){
        ultimasNoticiasNaTela = 0
    }else if(ultimasNoticiasNaTela<0){
        ultimasNoticiasNaTela = maxNoticias
    }
    carregarNoticia(ultimasNoticiasNaTela)
}

function animaRolagem(){
    tempoRola++
    if(tempoRola >= 200){
        tempoRola = 0
        rola(1)
    }
}

btnProximoUltimas.onclick = function(){
    rola(1)
}

btnAnteriorUltimas.onclick = function(){
    rola(-1)
}
window.addEventListener("load",iniciaRolagem)