<div id="navigation">
    <div id="mobile_nav_dark_bg" onclick="nav_show()" style="opacity: 0;"></div>
    <nav>
        <div id="navtop_ppm">
            <a href="index.php"></a>
            <img src="src/ppm300.png" />
        </div>
        <div id="menu">
            <div class="menu_btn">
                <!--<a class="mbtns" id="mbtn-home" href="home.html">Accueil</a>-->
                <a class="mbtns <?php if($page=="projets"){echo "current";} ?>" id="mbtn-projets" href="projets.php">Nos Projets</a>
                <a class="mbtns <?php if($page=="membres"){echo "current";} ?>" id="mbtn-membres" href="membres.php">Nos Membres</a>
                <a class="mbtns <?php if($page=="contact"){echo "current";} ?>" id="mbtn-contact" href="contact.php">Nous Contacter</a>
            </div>
        </div>
        <div id="mobile_open_close_btn" onclick="nav_show()" roulemapoule="0"></div>
        <div id="navlarge_ppm">
            <img id="ppm" src="src/ppmnavlarge.png" />
        </div>
    </nav>
</div>