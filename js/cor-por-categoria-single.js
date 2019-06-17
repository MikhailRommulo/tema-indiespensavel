let categoriaNome = document.getElementById('pegar-categoria').value 

window.onload = function(){
    if(categoriaNome == 'Notícias'){
        document.getElementsByClassName('cat-ativa')[0].style.borderBottom = "solid 5px #ffffff"
        let corForte = "#0396f8"
        let corFraca = "#b3dffc"
        corDaCategoria(corForte, corFraca) 
    }else if(categoriaNome == 'TV'){
        document.getElementsByClassName('cat-ativa')[1].style.borderBottom = "solid 5px #ffffff"
        let corForte = "#fd0000"
        let corFraca = "#f9b1b1"
        corDaCategoria(corForte, corFraca) 
    }else if(categoriaNome == 'Cinema'){
        document.getElementsByClassName('cat-ativa')[2].style.borderBottom = "solid 5px #ffffff"
        let corForte = "#f07f16"
        let corFraca = "#f4c497"
        corDaCategoria(corForte, corFraca) 
    }else if(categoriaNome == 'Música'){
        document.getElementsByClassName('cat-ativa')[3].style.borderBottom = "solid 5px #ffffff"
        let corForte = "#e6be67"
        let corFraca = "#e5dac3"
        corDaCategoria(corForte, corFraca) 
    }else if(categoriaNome == 'Quadrinhos'){
        document.getElementsByClassName('cat-ativa')[4].style.borderBottom = "solid 5px #ffffff"
        let corForte = "#3ca03c"
        let corFraca = "#c9eac9"
        corDaCategoria(corForte, corFraca) 
    }else if(categoriaNome == 'Games'){
        document.getElementsByClassName('cat-ativa')[5].style.borderBottom = "solid 5px #ffffff"
        let corForte = "#9659f7"
        let corFraca = "#d4bef7"
        corDaCategoria(corForte, corFraca) 
    }
}

function corDaCategoria(corForte, corFraca){      
        document.getElementsByTagName('header')[0].style.backgroundColor = corForte
        document.getElementsByClassName('mais-opcoes')[0].style.backgroundColor = corForte
        document.getElementById('menu-mobile').style.backgroundColor = "#f07f16"
        for(let i = 0; i<document.getElementsByClassName('ultimas-editoria-cor').length; i++){
            document.getElementsByClassName('ultimas-editoria-cor')[i].style.backgroundColor = corFraca;
        }
        for(let c = 0; c<document.getElementsByClassName('texto-noticia-editoria').length; c++){
            document.getElementsByClassName('texto-noticia-editoria')[c].style.backgroundColor = corFraca;
        }
        document.getElementById('rede-social-color').style.backgroundColor = corForte  
        document.getElementById('desenvolvimento').style.backgroundColor = corForte
}