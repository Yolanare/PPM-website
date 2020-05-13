// VARIABLES
var nav = document.querySelector("nav");
var navlarge_ppm = document.querySelector("#navlarge_ppm");
var show_btn = document.querySelector("#mobile_open_close_btn");
var dark = document.querySelector("#mobile_nav_dark_bg");


// MISC
var currentScrollPosPercent = function getScrollPercent() { // https://stackoverflow.com/a/8028584
    var h = document.documentElement,
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight';
    return (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;
}


// -- MOBILE
// MENU - Auto-hide navigation bar
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
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


// MENU - Folding navigation
nav_show = function() {
    if (show_btn.getAttribute("roulemapoule") == "0") {
        document.querySelector("body").style.overflow = "hidden";
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
        document.querySelector("body").style.overflow = "auto";

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













