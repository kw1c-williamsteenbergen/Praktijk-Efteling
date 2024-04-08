<?php
/**

User: William Steenbergen, Arne Kraaijeveld en Jesse van der Pluim
Date: 25-3-2024
File: result.php
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
        echo "<p class='resultaat'> Je houdt van snelle attracties de Baron is jouw ideale attractie is: De Barron 1898.</p>";
        break;
    case($totaalPunten > 70 && $totaalPunten <= 100):
        echo "<p class='resultaat'> je houdt van snelle attracties maar niet al te extreem jouw favoriete attractie is: de Python.</p>";
        break;
    case($totaalPunten > 30 && $totaalPunten <= 70):
        echo "<p class='resultaat'> je houdt van wat snelheid, je bent alleen niet echt een achtbaan fan, je favoriete attractie is: max en moritz.</p>";
        break;
    case($totaalPunten < 30):
        echo "<p class='resultaat'> je bent niet een snelheidsfreak, je favoriete attractie is De Piranha of de Fata Morgana.</p>";
        break;
    default:
        echo "<p class='resultaat'> Oeps, je hebt niks ingevuld! </p>";

}
?>
</body>
</html>