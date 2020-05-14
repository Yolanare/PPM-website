<?php $page = "accueil"; ?>
<!DOCTYPE html>

<html>
<head>
    <title>Accueil - Pamplemousse</title>
    
    <?php include 'includes/head.php'; ?>
    <style type="text/css">
        img[id*="homew"] {
            position: fixed;
        }

        #homew_tr {
            top: 0;
            right: 0;
            width: 35%;
        }
        #homew_br {
            bottom: 0;
            right: 0;
            width: 80%;
        }

        #welcome_center {    
            height: 100%;
            display: flex;
            justify-content: center;
        }
        .welcome {
            margin-top: 20%;
            margin-right: 25%;
            position: relative;
            height: min-content;
        }
        #w1 {
            font-size: 35px;
            text-align: left;
            color: var(--accent-fruit);
        }
        #w2 {
            margin-top: 10px;
            font-size: 20px;
            text-align: left;
            opacity: 0.5;
            color: var(--accent-fruit);
        }
    </style>
</head>
<body>
    <!-- NAVIGATION -->
    <?php include 'includes/nav.php'; ?>

    <!-- CONTENT -->
    <div id="content" style="align-items: center;">
        <div class="homew">
            <img id="homew_tr" src="src/homew_tr.png" />
            <img id="homew_br" src="src/homew_br.png" />
        </div>
        <div id="welcome_center">
            <div class="welcome">
                <div id="w1">Bienvenue sur le site!</div>
                <div id="w2">
                    Dirige toi vers ce qui t'intéresse à l'aide du menu à ta disposion.<br>
                    <i>(Cette page changera plus tard pour glorifier l'équipe)</i><br><br>
                    On est en putain de bêta de toute façon kestufoulà maggle wsh tarien àfaire ic i  !??!
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="ppmscript.js"></script>
</body>
</html>