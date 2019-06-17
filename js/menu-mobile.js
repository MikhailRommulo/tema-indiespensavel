let hamburger = document.getElementById("menu-hamburger")

let fecharMenu = document.getElementById("fechar-menu")

hamburger.onclick = function(){
    document.getElementById("menu-mobile").style.display = "inline"
}

fecharMenu.onclick = function(){
    document.getElementById("menu-mobile").style.display = "none"
}