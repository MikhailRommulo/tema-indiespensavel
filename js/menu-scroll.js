window.onscroll = function(){
    const top = window.pageYOffset || document.documentElement.scrollTop
    let menu = document.querySelector("header")
    let logo = document.getElementById("logo")
    if(screen.width > 420){
        if(top > 65){           
            menu.classList.add("menu-fixo")            
        }else if(top == 0){        
            menu.classList.remove("menu-fixo")     
        }
    }
}