// VARIABLES
var nav = document.querySelector("nav");
var nav_menu = document.querySelector("#menu");
var nav_logo = document.querySelector("#navtop_ppm");
var navlarge_ppm = document.querySelector("#navlarge_ppm");
var nav_show_btn = document.querySelector("#mobile_open_close_btn");
var nav_darkbg = document.querySelector("#mobile_nav_dark_bg");


// MISC
var currentScrollPosPercent = function getScrollPercent() { // https://stackoverflow.com/a/8028584
    var h = document.documentElement,
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight';
    return (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight); //  * 100
}


// -- MOBILE
// MENU - Auto-hide navigation bar
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    if (window.innerWidth < 900) {
        var currentScrollPos = window.pageYOffset;
        if (nav_show_btn.getAttribute("roulemapoule") == "0") {
            if (prevScrollpos > currentScrollPos) {
                nav.style.top = "0";
            } else {
                nav.style.top = "calc(-1px + (0vw - var(--nav_nav_show_btn_height)))";
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
    if (nav_show_btn.getAttribute("roulemapoule") == "0") { // shown
        document.querySelector("body").style.overflow = "hidden";
        nav_show_btn.setAttribute("roulemapoule", "1");
        navlarge_ppm.style.opacity = "1";

        nav.style.transition = "transform 0.7s cubic-bezier(0.65, 0.15, 0, 1), top 0.5s cubic-bezier(0.35, 0, 0, 0.99) 0.3s";
        nav.style.transform = "translateY(0%)";

        nav_logo.style.animation = "none";
        setTimeout(function() { nav_logo.style.animation = "mobile_navtop_ppm_spawn 1.3s cubic-bezier(0.4, 0, 0, 1)"; },0) // yeah i'm a genius for using that like that
        nav_menu.style.top = "55%";
        nav_menu.style.transition = "1.15s cubic-bezier(0.7, 0, 0, 1)";

        nav_darkbg.style.transition = "transform 0.8s cubic-bezier(0.6, 0, 0, 1), opacity 1.75s cubic-bezier(0.3, 0.1, 0, 1)";
        nav_darkbg.style.transform = "translateY(5%)";
        nav_darkbg.style.opacity = "0.4";
        nav_darkbg.style.pointerEvents = "auto";
    }
    else { // hidden
        document.querySelector("body").style.overflow = "auto";

        nav_show_btn.setAttribute("roulemapoule", "0");
        navlarge_ppm.style.opacity = "0.35";

        nav.style.transition = "transform 1s cubic-bezier(0.5, 0, 0, 1), top 0.5s cubic-bezier(0.35, 0, 0, 0.99) 0.3s";
        nav.style.transform = "translateY(calc(var(--nav_show_btn_height) - 100%))";

        nav_menu.style.top = "45%";
        nav_menu.style.transition = "0s 1s";

        nav_darkbg.style.transition = "transform 0s 1.15s, opacity 1.1s cubic-bezier(0.7, 0, 0, 1)"; // cubic-bezier(0.6, 0, 0, 1)
        nav_darkbg.style.transform = "translateY(-105%)";
        nav_darkbg.style.opacity = "0";
        nav_darkbg.style.pointerEvents = "none";
    }
}













