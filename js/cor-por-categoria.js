let url_atual = window.location.href;

window.onload = function(){
    if(url_atual.indexOf('/noticias') != -1){
        document.getElementsByClassName('cat-ativa')[0].style.borderBottom = "solid 5px #ffffff"
        let corForteCat = "#0396f8"
        let corFracaCat = "#b3dffc"
        corDaCategoriaHome(corForteCat, corFracaCat)
    }else if(url_atual.indexOf('/tv') != -1){ 
        document.getElementsByClassName('cat-ativa')[1].style.borderBottom = "solid 5px #ffffff"
        let corForteCat = "#fd0000"
        let corFracaCat = "#f9b1b1"
        corDaCategoriaHome(corForteCat, corFracaCat)
    }else if(url_atual.indexOf('/cinema') != -1){ 
        document.getElementsByClassName('cat-ativa')[2].style.borderBottom = "solid 5px #ffffff"
        let corForteCat = "#f07f16"
        let corFracaCat = "#f4c497"
        corDaCategoriaHome(corForteCat, corFracaCat)
    }else if(url_atual.indexOf('/musica') != -1){ 
        document.getElementsByClassName('cat-ativa')[3].style.borderBottom = "solid 5px #ffffff"
        let corForteCat = "#e6be67"
        let corFracaCat = "#e5dac3"
        corDaCategoriaHome(corForteCat, corFracaCat)
    }else if(url_atual.indexOf('/quadrinhos') != -1){ 
        document.getElementsByClassName('cat-ativa')[4].style.borderBottom = "solid 5px #ffffff"
        let corForteCat = "#3ca03c"
        let corFracaCat = "#c9eac9"
        corDaCategoriaHome(corForteCat, corFracaCat)
    }else if(url_atual.indexOf('/games') != -1){ 
        document.getElementsByClassName('cat-ativa')[5].style.borderBottom = "solid 5px #ffffff"
        let corForteCat = "#9659f7"
        let corFracaCat = "#d4bef7"
        corDaCategoriaHome(corForteCat, corFracaCat)
    }
}

function corDaCategoriaHome(corForteCat, corFracaCat){       
        document.getElementsByTagName('header')[0].style.backgroundColor = corForteCat
        document.getElementsByClassName('mais-opcoes')[0].style.backgroundColor = corForteCat
        document.getElementById('menu-mobile').style.backgroundColor = corForteCat
        document.getElementsByClassName('titulo-mais-lidas')[0].style.color = corForteCat
        document.getElementsByClassName('titulo-noticias-categoria')[0].style.color = corForteCat
        for(let i= 0; i<document.getElementsByTagName('button').length; i++){
            document.getElementsByTagName('button')[i].style.backgroundColor = corForteCat
        }
        for(let i= 0; i<document.getElementsByClassName('mais-lidas-unidade-categoria').length; i++){
            document.getElementsByClassName('mais-lidas-unidade-categoria')[i].style.backgroundColor = corFracaCat
        }
        for(let i= 0; i<document.getElementsByClassName('noticia-categoria').length; i++){
            document.getElementsByClassName('noticia-categoria')[i].style.backgroundColor = corFracaCat
        }        
        document.getElementById('rede-social-color').style.backgroundColor = corForteCat
        document.getElementById('desenvolvimento').style.backgroundColor = corForteCat
}