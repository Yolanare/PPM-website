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
                        $discord = array( "color" => "#7289DA", "link" => "https://discord.gg/c2KMJpt", "size" => "28 20", "logo" => "M20.6644 20l-1.5822-1.9286c3.1404-.881 4.34-2.8333 4.34-2.8333-.9828.643-1.9178 1.0953-2.7568 1.4048-1.1986.5-2.3493.8333-3.476 1.0238-2.3014.4286-4.41.3095-6.209-.0238C9.613 17.38 8.43836 17 7.45548 16.619c-.55137-.2143-1.1507-.4762-1.75-.8095-.07192-.0477-.14384-.0715-.21575-.119-.04795-.0238-.07192-.0476-.0959-.0714l-.67124-.4048s1.1507 1.9048 4.1952 2.8095L7.31164 20C2.0137 19.8333 0 16.38 0 16.38 0 8.7144 3.45205 2.50017 3.45205 2.50017 6.9041-.07123 10.1884.00019786 10.1884.00019786L10.428.28591C6.113 1.524 4.1233 3.40493 4.1233 3.40493s.5274-.28572 1.41438-.69047c2.56507-1.11904 4.60273-1.42856 5.44183-1.5.1438-.0238.2637-.04762.4075-.04762 1.4623-.19047 3.1164-.2381 4.8425-.04762 2.2773.2619 4.7226.92857 7.2157 2.2857 0 0-1.8938-1.7857-5.9692-3.023784l.3356-.38094814S21.096-.07123 24.548 2.50017c0 0 3.452 6.21423 3.452 13.88083 0 0-2.0377 3.4523-7.3356 3.62zM9.51712 8.88106c-1.36644 0-2.4452 1.19044-2.4452 2.64284s1.10274 2.6428 2.4452 2.6428c1.36648 0 2.44518-1.1904 2.44518-2.6428.024-1.4524-1.0787-2.64284-2.44518-2.64284zm8.74998 0c-1.3664 0-2.4452 1.19044-2.4452 2.64284s1.1028 2.6428 2.4452 2.6428c1.3665 0 2.4452-1.1904 2.4452-2.6428s-1.0787-2.64284-2.4452-2.64284z" ) );
                    foreach($footLinks as $fLink) { echo'<a class="foot_link" style="background-color:'.$fLink["color"].';" href="'.$fLink["link"].'"><div><svg viewbox="0 0 '.$fLink["size"].'"><path d="'.$fLink["logo"].'"></svg></div></a>';} ?>
                </div>
            </div>
        </div>
    </>


    <script type="text/javascript" src="ppmscript.js"></script>
</body>
</html>