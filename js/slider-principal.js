let slider = document.getElementsByClassName("slider")

let btnAnteriorSlider = document.getElementById("btn_anterior_slider")

let btnProximoSlider = document.getElementById("btn_proximo_slider")

let slideAtual

let maxSlide

let tempoTroca

function carregarSlider(slide){
    slider[slide].style.display = "inline"    
    for(i=0;i<slider.length;i++){
        if(slider[i] != slider[slide]){
            slider[i].style.display = "none"
        }
    }
}

function inicia(){
    slideAtual = 0
    maxSlide = slider.length-1
    carregarSlider(slideAtual)
    tempoTroca = 0
    anima()    
}

function troca(dir){
    tempoTroca = 0
    slideAtual+=dir
    if(slideAtual>maxSlide){
        slideAtual = 0
    }else if(slideAtual<0){
        slideAtual = maxSlide
    }
    carregarSlider(slideAtual)
}

function anima(){
    tempoTroca++
    if(tempoTroca >= 1800){
        tempoTroca = 0
        troca(1)
    }
    window.requestAnimationFrame(anima)
}

btnProximoSlider.onclick = function(){
    troca(1)
}

btnAnteriorSlider.onclick = function(){
    troca(-1)
}
window.addEventListener("load",inicia)