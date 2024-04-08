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

        echo "<p class='resultaat'> Je hebt $totaalPunten van de 120 punten behaald!</p>";

        switch($totaalPunten)
        {
            case($totaalPunten > 100):
                echo "<p class='resultaat'> Je houdt van snelle spannende attracties</p>";
                break;
            case($totaalPunten > 70 && $totaalPunten <= 100):
                echo "<p class='resultaat'> je verzorgt je gebit goed, maar je op specifieke onderdelen moet je gedrag toch verbeteren</p>";
                break;
            case($totaalPunten > 30 && $totaalPunten <= 70):
                echo "<p class='resultaat'> je verzorgt gebit matig en zou om advies moeten gaan vragen bij de tandarts. Waarschijnlijk heb je al gebitsproblemen?</p>";
                break;
            case($totaalPunten < 30):
                echo "<p class='resultaat'> je verzorgt gebit niet en zou om advies moet gaan vragen bij de tandarts. 
                      Waarschijnlijk ga je niet langs een tandarts en heb je ook al gebitsproblemen.</p>";
                break;
            default:
                echo "<p class='resultaat'> Geen punten bekend</p>";
        }
        ?>
    </body>
</html>