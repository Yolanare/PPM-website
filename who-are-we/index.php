<?php $page = "who"; $path = dirname(dirname(__FILE__))."/"; ?>
<!DOCTYPE html>

<html>
<head>
    <title>Nos Membres - Pamplemousse</title>
    
    <?php include  $path.'includes/head.php'; ?>
    <style type="text/css">
        :root {
            --mbre_fiches_size: 220px;
            --poem_bg_opacity: 0.8;
        }

        .profile_pic, .roles, .roles > div {
            -moz-user-select: none;
            user-select: none;
        }


        /* FICHES MEMBRES */
        .fiches_membres {
            margin-top: 15%;
            margin-bottom: 15%;
            position: relative;
            width: 100%;
        }
        .fiches_membres > #fm_all {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            user-select: none;
        }

        .fiche {
            width: var(--mbre_fiches_size);
            height: var(--mbre_fiches_size);
            transform: rotate(0deg);
            margin-right: 20px;
            margin-left: 20px;
            margin-bottom: 40px;
            border-radius: 22.5px;
            /*color: rgba(255, 255, 255, 0.85);*/
            background-color: var(--bg);
            box-shadow: 0px 10px 15px 0px rgba(255, 56, 117, 0.2);
            border-color: transparent;
            transition: 1.5s cubic-bezier(0.5, 0, 0, 1),
                transform 0.9s cubic-bezier(0.5, 0, 0, 1),
                box-shadow 0.9s cubic-bezier(0.5, 0, 0, 1);
            overflow: hidden;
            user-select: none;
            cursor: pointer;
        }

        .fiche > div {
            width: 100%;
            height: 100%;
            border-radius: inherit;
        }
        .first, .second {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: inherit;
        }
        .profile_pic {
            display: flex;
            justify-content: center;
        }
        .profile_pic>img {
            position: absolute;
            top: 15%;
            width: 45%;
            height: 45%;
            border-radius: 9999px;
            transition: 0.6s 0.25s cubic-bezier(0.5, 0, 0, 1), opacity 0.8s 0.25s cubic-bezier(0.6, 0.1, 0, 1);
        }

        .name {
            position: static;
            margin-top: 72.5%;
            margin-bottom: 45px;
            width: 100%;
            font-size: 24px;
            text-align: center;
            opacity: 1;
            transform: rotateY(0.0001deg); /*AA*/
            transition: 1.1s cubic-bezier(0.65, 0, 0, 1);
        }
        .desc {
            position: relative;
            height: -moz-fit-content;
            height: fit-content;
            /*margin-top: 45px;*/
            padding-right: 15px;
            padding-left: 15px;
            font-size: 14px;
            text-align: center;
            opacity: 0;
            transition: 1.2s cubic-bezier(0.65, 0, 0, 1);
        }
        .desc .info {
            margin-top: 45px;
            transition: 1.2s 0.3s;
            transform: rotateY(0.0001deg); /*AA*/
        }

            /* ROLES */
        .roles > div {
            display: inline-block;
            margin-right: 1.5px;
            margin-left: 1.5px;
            margin-bottom: 5px;
            padding: 2px 7px;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.35px;
            color: #ffffff;
            transform: rotateY(0.0001deg); /*AA*/
        }

        :root {
            --resp-color: var(--accent-fruit);
            --builder-color: #67c58d;
            --dev-color: #e0b880;
            --vid-color: #869ce4;
            --infogr-color: #f896d6;
        }

        #resp {
            border-color: var(--resp-color);
            background-color: var(--resp-color)
        }
        #builder {
            border-color: var(--builder-color);
            background-color: var(--builder-color)
        }
        #dev {
            border-color: var(--dev-color);
            background-color: var(--dev-color)
        }
        #vid {
            border-color: var(--vid-color);
            background-color: var(--vid-color)
        }
        #infogr {
            border-color: var(--infogr-color);
            background-color: var(--infogr-color)
        }

                /* FICHES MEMBRES TR */
        .fiche:hover {
            transform: translateY(-7.5px);
            background-color: var(--bg-active);
            box-shadow: 0px 17.5px 17.5px 0px rgba(255, 56, 117, 0.15);
            transition: 1.5s cubic-bezier(0.1, 0.05, 0, 1),
                transform 0.3s cubic-bezier(0.35, 0, 0, 1),
                box-shadow 0.2s linear;
        }
        .fiche:active {
            box-shadow: 0px 5px 10px 0px rgba(255, 56, 117, 0.25);
            transition: 0.15s cubic-bezier(0.25, 0, 0, 1),
                transform 1s cubic-bezier(0.5, 0, 0, 1);
        }

        .fiche:hover .profile_pic>img {
            transform: scale(0.9);
            opacity: 0;
            transition: opacity 0.35s 0.6s cubic-bezier(0.5, 0, 0, 1), transform 0.4s 0.6s;
        }

        .fiche:hover .name {
            margin-top: 8.5%;
            margin-bottom: 8.5px;
            opacity: 1;
            color: var(--accent-fruit);
            transition: 0.8s 0.5s cubic-bezier(0.5, 0, 0, 1), margin-bottom 0.9s 0.5s cubic-bezier(0.65, 0, 0, 1);
        }
        .fiche:hover .desc {
            opacity: 1;
            transition: 0.9s 0.5s cubic-bezier(0.65, 0, 0, 1);
        }
        .fiche:hover .desc .info {
            margin-top: 8.5px;
        }

        .fiche_shadow {
            position: absolute;
            overflow: auto;
            box-shadow: 0px 10px 15px 0px rgba(255, 56, 117, 0.2);
        }

        /* POEM */
        #fiches {
            display: flex;
            justify-content: center;
            max-width: 62.5%;
        }

        #poem_bg {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            height: 140%;
            border-radius: 9999px;
            opacity: var(--poem_bg_opacity);
            background: linear-gradient(90deg, var(--accent-fruit), transparent);
            transition: opacity 1s cubic-bezier(0.4, 0, 0, 1);
        }

        #poem_txt {
            font-family: "Trebuchet MS", "Montserrat";
            line-height: 2;
        }

        #poem_txt span:nth-child(1) {
            padding-left: 25px;
        }
        #poem_txt span:nth-child(2) {
            padding-left: 5px;
        }
        #poem_txt span:nth-child(3) {
            padding-left: 28px;
        }

        @media (min-width: 1311px) /*PC*/ {
            #poem_txt {
                position: fixed;
                width: 37.5%; /*27.5 + 10*/
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: end;
                padding-right: 10%; /*^ +10*/
                font-size: 16px;
                font-style: italic;
                letter-spacing: 1px;
                text-align: right;
                color: rgba(250,250,250,0.75);
                transition: color 1.2s cubic-bezier(0.1, 0.2, 0, 1);
            }

            #poem_bg:hover {
                opacity: calc(var(--poem_bg_opacity) - 0.15);
                transition: opacity 0.6s cubic-bezier(0.3, 0.2, 0, 1);
            }
            #poem_bg:hover #poem_txt, #poem_txt:hover {
                color: rgba(250,250,250,1);
                transition: color 0.7s cubic-bezier(0.3, 0.2, 0, 1);
            }
        }

        @media (max-width: 1310px) /*TABLET*/ {
            :root {
                --mbre_fiches_size: 165px;
            }

            #fiches {
                display: block;
                max-width: 100%;
            }

            .fiches_membres {
                margin-top: 10%;
                margin-bottom: 15%;
            }

            .fiche {
                margin-right: 17.5px;
                margin-left: 17.5px;
                margin-bottom: 35px;
                border: 2px solid;
                border-color: transparent;
                box-shadow: 0px 5px 10px 0px rgba(255, 56, 117, 0.2);
                transition: 1.5s 0.6s ease,
                    background-color 0.4s linear,
                    transform 0.9s 0.2s ease-in-out,
                    box-shadow 0.5s 0.4s linear,
                    border-color 0.5s 0.4s linear;
            }
            .fiche:hover, .fiche:active {
                border-color: var(--accent-mesocarp);
                box-shadow: 0px 5px 10px 0px rgba(255, 56, 117, 0);
                transition: 1.5s ease,
                    background-color 0.4s linear,
                    transform 0.5s cubic-bezier(0.4, 0, 0, 1),
                    box-shadow 0.4s linear,
                    border-color 0.4s linear;
            }
            .profile_pic>img {
                transition-timing-function: ease;
                transition-duration: 0.4s;
                transition-delay: 0.3s;
            }
            .fiche:hover .profile_pic>img {
                transition-timing-function: linear;
                transition-duration: 0.25s;
                transition-delay: 0.625s;
            }

            .roles > div {
                margin-right: 1px;
                margin-left: 1px;
                padding: 2px 5px;
                font-size: 11px;
            }
            .name {
                font-size: 22px;
            }
            .fiche:hover .name {
                margin-bottom: 5px;
            }
            .desc {
                font-size: 13px;
                opacity: 1;
            }
            .desc .info {
                margin-top: 5px;
                transition: none;
            }

            #mbre_poem {
                position: relative;
                width: 100%;
                padding-bottom: 15%;
            }
            #poem_bg {
                position: relative;
                background: none;
                transform: none;
            }
            #poem_txt {
                position: relative;
                top: 0;
                width: 100%;
                padding-right: 0;
                padding-left: 0;
                letter-spacing: 0.5px;
                font-size: 13px;
                font-weight: 400;
                text-align: center;
                transform: none;
                color: rgba(0,0,0,0.5)
            }
        }

        @media (max-width: 900px) /*MOBILE*/ {
            :root {
                --mbre_fiches_size: 150px;
            }
            
            .fiche {
                margin-right: 8px;
                margin-left: 8px;
                margin-bottom: 30px;
                box-shadow: 0px 7px 5px 0px rgba(255, 56, 117, 0.125);
                transition: 1.5s 0.6s ease,
                    background-color 0.4s linear,
                    transform 0.5s 0.6s ease-in-out,
                    box-shadow 0.4s 0.8s linear,
                    border-color 0.4s 0.8s linear;
            }
            .name, .desc {
                transition-delay: 0.3s;
            }
            .profile_pic>img {
                transition-timing-function: ease;
                transition-duration: 0.4s;
                transition-delay: 0.65s;
            }
            .fiche:hover .profile_pic>img {
                transition-timing-function: linear;
                transition-duration: 0.25s;
                transition-delay: 0.2s;
            }
            .fiche:hover .name, .fiche:hover .desc {
                transition-delay: 0.2s;
            }

            .roles > div {
                margin-bottom: 3px;
                margin-right: 1px;
                margin-left: 1px;
                padding: 2px 5px;
                font-size: 9px;
                font-weight: 600;
            }
            .name {
                font-size: 18px;
            }
            .desc {
                padding-right: 5px;
                padding-left: 5px;
                font-size: 11px;
            }

            .fiches_membres {
                margin-top: 10%;
                margin-bottom: 20%;
            }

            #mbre_poem {
                position: relative;
                width: 100%;
                padding-bottom: 15%;
            }
            #poem_txt {
                letter-spacing: 0.25px;
                font-size: 11.5px;
                user-select: none;
            }
        }
    </style>
</head>
<body>
    <!-- NAVIGATION -->
    <?php include  $path.'includes/nav.php'; ?>
    
    <!-- CONTENT -->
    <div id="content">
        <div id="fiches">
            <div class="fiches_membres">
                <div id="fm_all">
                    <?php include  $path.'includes/fiches_membres.php'; ?>
                </div>
            </div>
            <div id="mbre_poem">
                <div id="poem_bg">
                    <div id="poem_txt">
                        <div class="peom_grid" style="display: grid; transform: rotateY(0.0001deg); /*AA*/">
                            <span>
                                Juteuse comme la braise,<br>
                                L'effervescence du fruit tropical<br>
                                N'en est que plus belle.<br><br>
                            </span>
                            <span>
                                Par la cohésion de ses élements<br>
                                Elle permet au fruit des forces créatives<br>
                                De réduire à néant les feux de tout maux,<br>
                                De libérer le monde de son malheur.<br><br>
                            </span>
                            <span>
                                Elle éveille le brasier de la pureté<br>
                                Dans un jeu de cubes, pourtant si beau.<br>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="../ppmscript.js"></script>
    <script type="text/javascript">
        // EASTER EGG : SKORPIONNAN
        function egg_skorpio(){
            document.querySelector("#Skorpionnan").addEventListener('click', function (event) {
                if (event.detail === 2) {
                    document.querySelector('#audio_skorpio').play();
                }
            });
        }

        // MBRE POEM BG OPACITY BY SCROLL
        function PoemBgScroll() {
            if (window.innerWidth > 1311) {
                document.documentElement.style.setProperty('--poem_bg_opacity', ((0.8 + (0.2 * (currentScrollPosPercent())))).toFixed(2) );
            }
        }
        document.addEventListener("scroll", PoemBgScroll);
    </script>
</body>
</html>