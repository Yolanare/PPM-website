// VARIABLES
var nav = document.querySelector("#navigation");
var navlarge_ppm = document.querySelector("#navlarge_ppm");
var show_btn = document.querySelector("#mobile_open_close_btn");
var dark = document.querySelector("#mobile_nav_dark_bg");


// QD ON SCROLL, LA BARRE DU HAUT DISPARAIT, WAOUH
// Taken from somewhere in the web, don't remember exactly where but thanks
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    if (window.innerWidth < 900) {
        var currentScrollPos = window.pageYOffset;
        if (show_btn.getAttribute("roulemapoule") == "0") {
            if (prevScrollpos > currentScrollPos) {
                nav.style.top = "0";
            } else {
                nav.style.top = "calc(-1px + (0vw - var(--nav_show_btn_height)))";
            }
            prevScrollpos = currentScrollPos;
        }
        else {
            nav.style.top = "0";
        }
    }
}

// MENU QUI SE DEROULE QD ON CLIQUE SUR LE BOUTON ET QUI SE RENROULE AUSSI
nav_show = function () {
    if (show_btn.getAttribute("roulemapoule") == "0") {

        show_btn.setAttribute("roulemapoule", "1");
        navlarge_ppm.style.opacity = "1";

        nav.style.transition = "transform 0.7s cubic-bezier(0.65, 0.15, 0, 1), top 0.5s cubic-bezier(0.35, 0, 0, 0.99) 0.3s";
        nav.style.transform = "translateY(0%)";

        dark.style.transition = "transform 0.9s cubic-bezier(0.6, 0, 0, 1), opacity 1.5s cubic-bezier(0.5, 0, 0, 1)";
        dark.style.transform = "translateY(0%)";
        dark.style.opacity = "0.4";
        dark.style.pointerEvents = "auto";
    }
    else {

        show_btn.setAttribute("roulemapoule", "0");
        navlarge_ppm.style.opacity = "0.35";

        nav.style.transition = "transform 1s cubic-bezier(0.5, 0, 0, 1), top 0.5s cubic-bezier(0.35, 0, 0, 0.99) 0.3s";
        nav.style.transform = "translateY(calc(var(--nav_show_btn_height) - 100%))";

        dark.style.transition = "transform 1.5s cubic-bezier(0.6, 0, 0, 1), opacity 1.1s cubic-bezier(0.7, 0, 0, 1)";
        dark.style.transform = "translateY(-105%)";
        dark.style.opacity = "0";
        dark.style.pointerEvents = "none";
    }
}


// EASTER EGG : SKORPIONNAN
function egg_skorpio(){
    document.querySelector("#skorpio").addEventListener('click', function (evt) {
        if (evt.detail === 2) {
            document.querySelector('#audio_skorpio').play(); 
        }
    });
}














