<div id="navigation">
    <div id="mobile_nav_dark_bg" onclick="nav_show()"></div>
    <nav>
        <div id="navtop_ppm">
            <a onclick="nav_focus()" href="<?php if($page!="home"){echo "../";} ?>"></a>
            <img src="<?php if($page!="home"){echo "../";} ?>src/PPM/ppm300.png" />
        </div>
        <div id="menu">
            <div class="menu_btn">
                <a class="mbtns <?php if($page=="projects"){echo"current";} ?>" id="mbtn-projets" onclick="nav_focus()" href="<?php if($page!="home"){echo"../";} ?>projects/">Nos Projets</a>
                <a class="mbtns <?php if($page=="who"){echo"current";} ?>"      id="mbtn-who" onclick="nav_focus()"     href="<?php if($page!="home"){echo"../";} ?>who-are-we/">Qui sommes-nous</a>
                <a class="mbtns <?php if($page=="contact"){echo"current";} ?>"  id="mbtn-contact" onclick="nav_focus()" href="<?php if($page!="home"){echo"../";} ?>contact/">Nous Contacter</a>
            </div>
        </div>
        <div id="mobile_open_close_btn" onclick="nav_show()" roulemapoule="0"></div>
        <div id="navlarge_ppm">
            <img src="<?php if($page!="home"){echo "../";} ?>src/PPM/ppmnavlarge.png" />
        </div>
    </nav>
</div>