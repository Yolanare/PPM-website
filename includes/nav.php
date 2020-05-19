<div id="navigation">
    <div id="mobile_nav_dark_bg" onclick="nav_show()"></div>
    <nav>
        <div id="navtop_ppm">
            <a onclick="nav_focus()" href="<?php if($page!="accueil"){echo "../";} ?>"></a>
            <img src="<?php if($page!="accueil"){echo "../";} ?>src/PPM/ppm300.png" />
        </div>
        <div id="menu">
            <div class="menu_btn">
                <a class="mbtns <?php if($page=="projets"){echo"current";} ?>" id="mbtn-projets" onclick="nav_focus()" href="<?php if($page!="accueil"){echo"../";} ?>projets/">Nos Projets</a>
                <a class="mbtns <?php if($page=="membres"){echo"current";} ?>" id="mbtn-membres" onclick="nav_focus()" href="<?php if($page!="accueil"){echo"../";} ?>membres/">Qui sommes-nous</a>
                <a class="mbtns <?php if($page=="contact"){echo"current";} ?>" id="mbtn-contact" onclick="nav_focus()" href="<?php if($page!="accueil"){echo"../";} ?>contact/">Nous Contacter</a>
            </div>
        </div>
        <div id="mobile_open_close_btn" onclick="nav_show()" roulemapoule="0"></div>
        <div id="navlarge_ppm">
            <img src="<?php if($page!="accueil"){echo "../";} ?>src/PPM/ppmnavlarge.png" />
        </div>
    </nav>
</div>