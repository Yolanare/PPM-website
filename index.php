<?php $page = "home"; $path = dirname(__FILE__)."/"; ?>
<!DOCTYPE html>

<html>
<head>
    <title>Accueil - Pamplemousse</title>
    
    <?php include $path.'includes/head.php'; ?>
    <style type="text/css">
        :root {
            --nb_part: 3;
            --part_footer_h: calc(35%/var(--nb_part));
            --content_h: calc((var(--nb_part)*100%) + var(--part_footer_h));
        }
        #content {
            height: var(--content_h);
        }

        #part_welcome, #part_crea, #part_command {
            width: 100%;
            height: calc(100%/var(--nb_part));
        }
        #part_welcome {
            top: 0;
            background-color: #ffffff;
        }
        #part_crea {
            background-color: #d6b3f3;
        }
        #part_command {
            /*height: calc(100% / var(--nb_part) - var(--part_footer_h));*/
            background-color: #e4e4e4;
        }
        #part_footer{
            width: 100%;
            height: var(--part_footer_h);
            bottom: 0;
            background-color: #343436;
        }


        /*/ PART WELCOME /*/
        #first_text {
            z-index: 15;
            position: absolute;
            top: calc(30% / var(--nb_part));
            left: 8.5%;
        }
        #PPM-title {
            font-size: 65px;
            font-weight: 600;
        }
        #welcome_txt {
            margin-top: 8px;
            margin-left: 2px;
            font-size: 35px;
        }


        /*/ PART CREA /*/
        #crea_txt {
            z-index: 15;
            position: relative;
            top: 65%;
            right: 15%;
            font-size: 40px;
            font-weight: 600;
            color: rgb(250,250,250);
            text-align: center;
        }
        #crea {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .bigfruit {
            z-index: 11;
            display: grid;
            position:absolute;
            left: 15%;
            width: 100%;
            min-width: 1050px;
            min-height: 1185px;
            height: calc(170%/var(--nb_part));
            background: url(src/PPM/bigfruit.svg);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: bottom;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <!-- NAVIGATION -->
    <?php include $path.'includes/nav.php'; ?>

    <!-- CONTENT -->
    <div id="content">
        <div class="bigfruit">
            <div id="crea">
                <div id="crea_txt">
                    Entrons directement<br>dans le vif du sujet!
                </div>
            </div>
        </div>
        <div id="part_welcome">
            <div id="first_text">
                <div id="PPM-title">Pamplemousse</div>
                <div id="welcome_txt">Bienvenue!</div>
            </div>
        </div>
        <div id="part_crea">

        </div>
        <div id="part_command">
            
        </div>

        <div id="part_footer">
            
        </div>
    </div>


    <script type="text/javascript" src="ppmscript.js"></script>
</body>
</html>