<?php $page = "home"; $path = dirname(__FILE__)."/"; ?>
<!DOCTYPE html>

<html>
<head>
    <title>Accueil - Pamplemousse</title>
    
    <?php include $path.'includes/head.php'; ?>
    <style type="text/css">

        #part_welcome, #part_crea, #part_command, #part_footer {
            position: absolute;
            width: var(--content_w);
            height: 100%;
        }
        #part_welcome {
            top: 0;
        }
        #part_crea {
            top: 100%;
            background-color: #e8d7f6;
        }
        #part_command {
            top: 200%;
            background-color: #d6f3da;
        }
        #part_footer{
            z-index: 80;
            top: 300%;
            height: 35% !important;
        }


        /*/ PART WELCOME /*/
        #first_text {
            z-index: 15;
            position: absolute;
            top: 30%;
            left: 10%;
        }
        #PPM-title {
            font-size: 70px;
            font-weight: 600;
        }
        #welcome_txt {
            margin-top: 8px;
            margin-left: 3px;
            font-size: 35px;
        }


        /*/ PART CREA /*/
        .bigfruit {
            z-index: 11;
            position: absolute;
            top: 10%;
            left: 30%;
            width: var(--content_w);
            min-width: 1050px;
            min-height: 1185px;
            height: 165%;
            background: url(src/PPM/bigfruit.svg);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: bottom;
        }
        #crea {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        .crea_el {
            z-index: 15;
            position: relative;
            right: 16%;
            top: 67.5%;
        }

        #crea_txt {
            font-size: 40px;
            font-weight: 600;
            color: var(--bg);
            text-align: center;
            line-height: 1.35;
            letter-spacing: 1px;
        }

        #crea_btn {
            display: block;
            margin-top: 80px;
            text-align: center;
        }
        #crea_btn a {
            padding: 22.5px 35px;
            letter-spacing: 2px;
            font-size: 20px;
            font-weight: 600;
            border-radius: 99px;
            color: var(--accent-fruit);
            background-color: var(--bg);
        }
        #crea_btn a:hover {
            color: var(--bg);
        }
        #crea_btn a:active {
            color: var(--bg);
        }


        /*/ PART FOOTER /*/
        #foot_bg {
            position: absolute;
            width: 125%;
            height: 1000%;
            left: -12.5%;
            border-radius: 9999px;
            background-color: var(--nav-bg);
            overflow: hidden;
        }

        #foot_title {
            position: relative;
            margin-top: 5%;
            font-size: 32.5px;
            letter-spacing: 1px;
            text-align: center;
            color: var(--bg);
        }

        #foot_links {
            margin-top: 3.5%;
            text-align: center;
        }
        .foot_link {
            display: inline-block;
            position: relative;
            width: 70px;
            height: 70px;
            margin: 0 30px;
            border-radius: 9999px;
            transition: background-color 1s cubic-bezier(0.2, 0.5, 0, 1);
        }
        .foot_link:hover {
            background-color: var(--accent-fruit) !important;
            transition: 0.7s cubic-bezier(0.1, 0.5, 0, 1);
        }

        .foot_link > div {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex !important;
            justify-content: center;
            align-items: center;
            border-radius: inherit;
        }
        .btn_fl_tr a div svg {
            width: 55%;
            fill: var(--bg);
        }
        .btn_fl_tr a:hover > div {
            transform: scale(0.875);
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
                <div class="crea_el" id="crea_txt">
                    Entrons directement<br>dans le vif du sujet!
                </div>
                <div class="crea_el btn1_tr" id="crea_btn">
                    <a href="projects/">
                        <div>
                            NOS CRÉATIONS
                        </div>
                    </a>
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
            <!-- see .bigfruit -->
        </div>
        <div id="part_command">
            
        </div>

        <div id="part_footer">
            <div id="foot_bg">
                <div id="foot_title">
                    Les coins où nous retrouver!
                </div>
                <div class="btn1_tr btn_fl_tr" id="foot_links">
                    <?php $footLinks = array(
                        $pmc =array( "color" => "#6EC310", "link" => "https://www.planetminecraft.com/member/pamplemousse/", "size" => "126 126", "logo" => "M9,81V45h9V27h9v-9h18V9h36v9h18v9h9v18h9v36h-9v9v9h-9v9H81v9H45v-9H27v-9h-9V81H9z M36,36v18h18V36H36z" ),
                        $twitter = array( "color" => "#29A9ED", "link" => "https://twitter.com/PamplemousseBT", "size" => "24 24", "logo" => "M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z" ),
                        $discord = array( "color" => "#7289DA", "link" => "https://discord.gg/c2KMJpt", "size" => "28 20", "logo" => "M20.6644 20C20.6644 20 19.8014 18.9762 19.0822 18.0714C22.2226 17.1905 23.4212 15.2381 23.4212 15.2381C22.4384 15.881 21.5034 16.3334 20.6644 16.6429C19.4658 17.1429 18.3151 17.4762 17.1884 17.6667C14.887 18.0953 12.7774 17.9762 10.9795 17.6429C9.61301 17.381 8.43836 17 7.45548 16.6191C6.90411 16.4048 6.30479 16.1429 5.70548 15.8096C5.63356 15.7619 5.56164 15.7381 5.48973 15.6905C5.44178 15.6667 5.41781 15.6429 5.39384 15.6191C4.96233 15.381 4.7226 15.2143 4.7226 15.2143C4.7226 15.2143 5.87329 17.1191 8.91781 18.0238C8.19863 18.9286 7.31164 20 7.31164 20C2.0137 19.8333 0 16.381 0 16.381C0 8.7144 3.45205 2.50017 3.45205 2.50017C6.90411 -0.07123 10.1884 0.000197861 10.1884 0.000197861L10.4281 0.285909C6.11301 1.52399 4.12329 3.40493 4.12329 3.40493C4.12329 3.40493 4.65068 3.11921 5.53767 2.71446C8.10274 1.59542 10.1404 1.2859 10.9795 1.21447C11.1233 1.19066 11.2432 1.16685 11.387 1.16685C12.8493 0.976379 14.5034 0.92876 16.2295 1.11923C18.5068 1.38114 20.9521 2.0478 23.4452 3.40493C23.4452 3.40493 21.5514 1.61923 17.476 0.381146L17.8116 0.000197861C17.8116 0.000197861 21.0959 -0.07123 24.5479 2.50017C24.5479 2.50017 28 8.7144 28 16.381C28 16.381 25.9623 19.8333 20.6644 20ZM9.51712 8.88106C8.15068 8.88106 7.07192 10.0715 7.07192 11.5239C7.07192 12.9763 8.17466 14.1667 9.51712 14.1667C10.8836 14.1667 11.9623 12.9763 11.9623 11.5239C11.9863 10.0715 10.8836 8.88106 9.51712 8.88106ZM18.2671 8.88106C16.9007 8.88106 15.8219 10.0715 15.8219 11.5239C15.8219 12.9763 16.9247 14.1667 18.2671 14.1667C19.6336 14.1667 20.7123 12.9763 20.7123 11.5239C20.7123 10.0715 19.6336 8.88106 18.2671 8.88106Z" ) );
                    foreach($footLinks as $fLink) { echo'<a class="foot_link" style="background-color:'.$fLink["color"].';" href="'.$fLink["link"].'"><div><svg viewbox="0 0 '.$fLink["size"].'"><path d="'.$fLink["logo"].'"></svg></div></a>';} ?>
                </div>
            </div>
        </div>
    </>


    <script type="text/javascript" src="ppmscript.js"></script>
</body>
</html>