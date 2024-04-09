<?php
/**
 * User: William Steenbergen, Arne Kraaijeveld en Jesse van der Pluim
 * Date: 25-3-2024
 * File: Vragenlijst.php
 */

$indexNav= "../";
$vragNav = "";
$Nav = "../includes/";
$style = "../styles/";
$logo = "../images/";
$images = "../images/";

include "../includes/Header.php";
?>
    <body>
        <?php

        $totaalPunten = 0;
        for($i=1; $i<=12; $i++)
        {
            $totaalPunten += $_POST["vraag$i"];
        }

        $naam = $_POST["naam"];

        echo "<p class='resultaat'>$naam, je hebt $totaalPunten van de 120 punten behaald!</p>";

        switch($totaalPunten)
        {
            case($totaalPunten > 100):
                echo "<p class='resultaat'> Je houdt van snelle spannende attracties de baron is jouw favoriete atractie!</p> .<img src='../images/baron.jpg'>";
                      
                break;
            case($totaalPunten > 70 && $totaalPunten <= 100):
                echo "<p class='resultaat'> je houdt van snelle achtbanen maar niet van de Baron dan is de Python iets voor jou!</p> .<img src='../images/python.jpg'>";
                break;
            case($totaalPunten > 30 && $totaalPunten <= 70):
                echo "<p class='resultaat'> Je houdt wel van een beetje actie maar je vind de Python nog een beetje eng? Dan is Max en Morritz iets voor jou!</p> . <img src='../images/max_morritz.jpg'>";
                break;
            case($totaalPunten < 30):
                echo "<p class='resultaat'> je houdt eerder van een betoverende ervaring dan een snelle de droomvlucht is jouw ideale attractie!</p> . <img src='../images/droomvlucht.jpg' ";
                break;
            default:
                echo "<p class='resultaat'> Oeps, het lijkt erop dat je niks hebt ingevuld?</p>. <img src='../images/langnek.jpg'>";
        }
        include "../includes/Footer.php"
        ?>
    </body>
</html>