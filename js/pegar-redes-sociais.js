let redesReceber = document.getElementsByClassName('saboxplugin-icon-grey')

let redesSociais = document.getElementsByClassName('link-redes-sociais-autor')

for(let i=0; i<redesReceber.length; i++){
    redesSociais[i].href = redesReceber[i].href;
}