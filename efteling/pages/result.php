<?php
/**

User: William Steenbergen, Arne Kraaijeveld en Jesse van der Pluim
Date: 25-3-2024
File: Resultaat.php
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Efteling Attractie Resultaat</title>
    <link rel="stylesheet" type="text/css" href="../styles/stylesheet.css">
</head>
<?php
include "../includes/Navigatie.php";
?>
<body>
<?php
// Verkrijg de antwoorden van de vragenlijst via POST
$rit = $_POST['rit'];
$thema = $_POST['thema'];
$nat_worden = $_POST['nat_worden'];
$interactie = $_POST['interactie'];
$beweging = $_POST['beweging'];
$met_wie = $_POST['met_wie'];
$thema_soort = $_POST['thema_soort'];
$belang = $_POST['belang'];
$speciale_effecten = $_POST['speciale_effecten'];
$teamwork = $_POST['teamwork'];
$water = $_POST['water'];
$specifiek_thema = $_POST['specifiek_thema'];
// Maak een array van attracties met bijbehorende eigenschappen
$attracties = array(
    "Droomvlucht" => array("rit" => "a", "thema" => "a"),
    "Baron 1898" => array("rit" => "b", "thema" => "b"),
    "De Vliegende Hollander" => array("rit" => "c", "thema" => "c"),
    "Symbolica" => array("rit" => "d", "thema" => "d"),
    "Python" => array("rit" => "b", "thema" => "d"),
    "Joris en de Draak" => array("rit" => "b", "thema" => "a"),
    "Vogel Rok" => array("rit" => "b", "thema" => "d"),
    "Fata Morgana" => array("rit" => "a", "thema" => "a"),
    "Villa Volta" => array("rit" => "a", "thema" => "d"),
);

$besteMatch = "";
$besteScore = 0;

// Loop door de attracties en bepaal de overeenstemmingsscore voor elke attractie op basis van de antwoorden
foreach ($attracties as $attractie => $kenmerken) {
    $score = 0;

    // Bereken de score op basis van overeenkomsten tussen de antwoorden en de kenmerken van de attractie
    if ($rit == $kenmerken['rit']) {
        $score++;
    }
    if ($thema == $kenmerken['thema']) {
        $score++;
    }

    // Update de beste match als de score hoger is dan de huidige beste score
    if ($score > $besteScore) {
        $besteMatch = $attractie;
        $besteScore = $score;
    }
}

// Toon het resultaat aan de gebruiker
echo "<h2>Jouw ideale Efteling-attractie is: $besteMatch</h2>";
?>

</body>
</html>