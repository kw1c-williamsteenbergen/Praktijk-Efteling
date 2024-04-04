<?php
/**
 * User: William Steenbergen, Arne Kraaijeveld en Jesse van der Pluim
 * Date: 25-3-2024
 * File: Vragenlijst.php
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Efteling Attractie Voorkeuren</title>
</head>
<body>
<h2>Ontdek jouw ideale Efteling-attractie!</h2>
<form method="post" action="result.php">
    <p>Welk soort attractie spreekt jou het meest aan?</p>
    <input type="radio" name="rit" value="a"> Rustige ritjes met een panoramisch uitzicht<br>
    <input type="radio" name="rit" value="b"> Snelle achtbanen en spannende attracties<br>
    <input type="radio" name="rit" value="c"> Waterattracties met spetters en glijbanen<br>
    <input type="radio" name="rit" value="d"> Interactieve attracties met speciale effecten<br>

    <p>Welk thema spreekt jou het meest aan bij attracties?</p>
    <input type="radio" name="thema" value="a"> Sprookjesachtige en betoverende landschappen<br>
    <input type="radio" name="thema" value="b"> Avonturen in exotische oorden en wildernis<br>
    <input type="radio" name="thema" value="c"> Waterwerelden en onderwateravonturen<br>
    <input type="radio" name="thema" value="d"> Futuristische en sciencefiction-omgevingen<br>

    <p>Wat is jouw mening over nat worden tijdens attracties?</p>
    <input type="radio" name="nat_worden" value="a"> Liever droog blijven<br>
    <input type="radio" name="nat_worden" value="b"> Het maakt me niet uit<br>
    <input type="radio" name="nat_worden" value="c"> Het hoort erbij, ik vind het leuk<br>
    <input type="radio" name="nat_worden" value="d"> Ik zoek actief attracties op waarbij ik nat kan worden<br>

    <p>Hoe belangrijk is interactie voor jou tijdens attracties?</p>
    <input type="radio" name="interactie" value="a"> Niet belangrijk, ik wil gewoon genieten van de rit<br>
    <input type="radio" name="interactie" value="b"> Een beetje interactie is wel leuk<br>
    <input type="radio" name="interactie" value="c"> Het is essentieel, ik hou van attracties waarbij ik actief betrokken ben<br>
    <input type="radio" name="interactie" value="d"> Ik zoek specifiek naar attracties waarbij ik zelf invloed heb op het verloop<br>

    <p>Welk type beweging spreekt jou het meest aan bij attracties?</p>
    <input type="radio" name="beweging" value="a"> Zachte en rustige bewegingen<br>
    <input type="radio" name="beweging" value="b"> Snelle en draaiende bewegingen<br>
    <input type="radio" name="beweging" value="c"> Golvende en wiebelende bewegingen<br>
    <input type="radio" name="beweging" value="d"> Onvoorspelbare en verrassende bewegingen<br>

    <p>Met wie ga je meestal naar een attractiepark?</p>
    <input type="radio" name="met_wie" value="a"> Familie met jonge kinderen<br>
    <input type="radio" name="met_wie" value="b"> Vrienden<br>
    <input type="radio" name="met_wie" value="c"> Partner<br>
    <input type="radio" name="met_wie" value="d"> Alleen of met een groep avontuurlijke zielen<br>

    <p>Welk soort thema spreekt jou het meest aan bij attracties?</p>
    <input type="radio" name="thema_soort" value="a"> Historische en culturele thema's<br>
    <input type="radio" name="thema_soort" value="b"> Avontuurlijke en ontdekkingsreisthema's<br>
    <input type="radio" name="thema_soort" value="c"> Fantasie en magische thema's<br>
    <input type="radio" name="thema_soort" value="d"> Technologische en futuristische thema's<br>

    <p>Wat vind je belangrijker bij attracties?</p>
    <input type="radio" name="belang" value="a"> Een verhaal en een meeslepende ervaring<br>
    <input type="radio" name="belang" value="b"> Hoogwaardige speciale effecten en technologie<br>
    <input type="radio" name="belang" value="c"> Snelheid en opwinding<br>
    <input type="radio" name="belang" value="d"> Interactie en betrokkenheid<br>

    <p>Ben je op zoek naar attracties met indrukwekkende speciale effecten, zoals vuurwerk of lichtshows?</p>
    <input type="radio" name="speciale_effecten" value="ja"> Ja<br>
    <input type="radio" name="speciale_effecten" value="nee"> Nee<br>

    <p>Geniet je van attracties die draaien om teamwork en samenwerking?</p>
    <input type="radio" name="teamwork" value="ja"> Ja<br>
    <input type="radio" name="teamwork" value="nee"> Nee<br>

    <p>Heb je liever attracties met water, zoals waterglijbanen, of vermijd je liever natte attracties?</p>
    <input type="radio" name="water" value="ja"> Ik geniet van attracties met water<br>
    <input type="radio" name="water" value="nee"> Ik vermijd liever natte attracties<br>

    <p>Heb je een voorkeur voor attracties met een specifiek thema, zoals sciencefiction of fantasie?</p>
    <input type="radio" name="specifiek_thema" value="ja"> Ja<br>
    <input type="radio" name="specifiek_thema" value="nee"> Nee<br>

    <input type="submit" value="Verstuur">
</form>
</body>
</html>
