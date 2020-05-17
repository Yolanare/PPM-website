<?php

// Resp
$mbreList = array(
    $mbreBrowlin = array(
        "name" => "Browlin",
        "desc" => "<i>L'important c'est l'essentiel et ça c'est le principal!</i>",
        "role" => "builder",
        "role_resp" => "resp",
        "pic" => "browlin",
    ),
    $mbreNija = array(
        "name" => "Nija",
        "desc" => "<i><strong>Gruiiii !</strong></i>",
        "role" => "builder",
        "role_resp" => "resp",
        "pic" => "nija",
    ),
    $mbreSkorpionnan = array(
        "name" => "Skorpionnan",
        "desc" => "<strong>Pseudo à écorcher.</strong>",
        "role" => "builder",
        "role_resp" => "resp",
        "pic" => "skorpio",
    ),
    // Builder
    $mbreAsstron = array(
        "name" => "Asstron",
        "desc" => "Acteur porno pour adultes à temps plein et léo lui doit 50 balles.",
        "role" => "builder",
        "pic" => "asstron",
    ),
    $mbrePablo = array(
        "name" => "Pablo",
        "desc" => "Inactif.<br>Qui sait pourquoi il est là très franchement ?",
        "role" => "builder",
        "pic" => "pablo",
    ),
    $mbreSeifer = array(
        "name" => "Seifer",
        "desc" => "<i>L'Intelligence Artificielle n'a aucune chance face à la Stupidité Naturelle!</i>",
        "role" => "builder",
        "pic" => "seifer",
    ),
    // Dev
    $mbreArken = array(
        "name" => "Arken",
        "desc" => "<strong>Java > World</strong>",
        "role" => "dev",
        "pic" => "arken",
    ),
    $mbreLeod1 = array(
        "name" => "Leod1",
        "desc" => "Relire ou recopier c'est inutile, tant que ça marche c'est bon!",
        "role" => "dev",
        "pic" => "leod1",
    ),
    $mbreYohann = array(
        "name" => "Yohann",
        "desc" => "Si debugger, c’est supprimer des bugs, alors programmer c'est d'en ajouter.",
        "role" => "dev",
        "pic" => "yohann",
    ),
    // Misc
    $mbreCaloucath = array(
        "name" => "Caloucath",
        "desc" => "<i>Makes movies but loves Minecraft</i>",
        "role" => "vid",
        "pic" => "caloucath",
    ),
    $mbreYolan = array(
        "name" => "Yolan'",
        "desc" => "Mascotte de l'équipe.<br>N'apparaît que quand il y a du profit à se faire.",
        "role" => "infogr",
        "pic" => "yolan",
    )
);
foreach($mbreList as $mbre) {
echo'<div class="fiche" id="'.$mbre["name"].'" '.(($mbre==$mbreSkorpionnan)?'onclick="egg_skorpio()"':"").'>';
    if($mbre==$mbreSkorpionnan){echo'<audio id="audio_skorpio" src="../src/sounds/skorpionman.mp3"><!-- Voice of Aurélien Sama --></audio>';}
    echo'<div>
        <div class="first">
            <div class="profile_pic"><img src="../src/fiches_membres/profile_'.$mbre["pic"].'.jpg" /></div>
        </div>
        <div class="second">
            <div class="name">'.$mbre["name"].'</div>
            <div class="desc">
                <div class="roles">';
                if(array_key_exists('role_resp',$mbre)){if($mbre["role_resp"]=="resp"){echo'<div id="resp">Responsable</div>';}}
                if($mbre["role"]=="builder"){echo'<div id="builder">Builder</div>';}
                if($mbre["role"]=="dev"){echo'<div id="dev">Développeur</div>';}
                if($mbre["role"]=="vid"){echo'<div id="vid">Réal° Vidéo</div>';}
                if($mbre["role"]=="infogr"){echo'<div id="infogr">Infographiste</div>';}
                echo'</div>
                <div class="info">'.$mbre["desc"].'</div>
            </div>
        </div>
    </div>
</div>';
}

?>