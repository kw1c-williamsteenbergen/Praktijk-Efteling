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
<h2>Ontdek jouw ideale Efteling-attractie!</h2>
<form method="post" action="result.php">
    <p>Welk soort attractie spreekt jou het meest aan?</p>
    <input type="radio" name="vraag1" required value="5"> Rustige ritjes met een panoramisch uitzicht<br>
    <input type="radio" name="vraag1" required value="10"> Snelle achtbanen en spannende attracties<br>
    <input type="radio" name="vraag1" required value="1"> Waterattracties met spetters en glijbanen<br>
    <input type="radio" name="vraag1" required value="5"> Interactieve attracties met speciale effecten<br>

    <p>Welk thema spreekt jou het meest aan bij attracties?</p>
    <input type="radio" name="vraag2" required value="5"> Sprookjesachtige en betoverende landschappen<br>
    <input type="radio" name="vraag2" required value="10"> Avonturen in exotische oorden en wildernis<br>
    <input type="radio" name="vraag2" required value="5"> Waterwerelden en onderwateravonturen<br>
    <input type="radio" name="vraag2" required value="1"> Futuristische en sciencefiction-omgevingen<br>

    <p>Wat is jouw mening over nat worden tijdens attracties?</p>
    <input type="radio" name="vraag3" required value="1"> Liever droog blijven<br>
    <input type="radio" name="vraag3" required value="10"> Het maakt me niet uit<br>
    <input type="radio" name="vraag3" required value="5"> Het hoort erbij, ik vind het leuk<br>
    <input type="radio" name="vraag3" required value="5"> Ik zoek actief attracties op waarbij ik nat kan worden<br>

    <p>Hoe belangrijk is interactie voor jou tijdens attracties?</p>
    <input type="radio" name="vraag4" required value="1"> Niet belangrijk, ik wil gewoon genieten van de rit<br>
    <input type="radio" name="vraag4" required value="5"> Een beetje interactie is wel leuk<br>
    <input type="radio" name="vraag4" required value="10"> Het is essentieel, ik hou van attracties waarbij ik actief betrokken ben<br>
    <input type="radio" name="vraag4" required value="5"> Ik zoek specifiek naar attracties waarbij ik zelf invloed heb op het verloop<br>

    <p>Welk type beweging spreekt jou het meest aan bij attracties?</p>
    <input type="radio" name="vraag5" required value="1"> Zachte en rustige bewegingen<br>
    <input type="radio" name="vraag5" required value="5"> Snelle en draaiende bewegingen<br>
    <input type="radio" name="vraag5" required value="5"> Golvende en wiebelende bewegingen<br>
    <input type="radio" name="vraag5" required value="10"> Onvoorspelbare en verrassende bewegingen<br>

    <p>Met wie ga je meestal naar een attractiepark?</p>
    <input type="radio" name="vraag6" required value="1"> Familie met jonge kinderen<br>
    <input type="radio" name="vraag6" required value="10"> Vrienden<br>
    <input type="radio" name="vraag6" required value="5"> Partner<br>
    <input type="radio" name="vraag6" required value="5"> Alleen of met een groep avontuurlijke zielen<br>

    <p>Welk soort thema spreekt jou het meest aan bij attracties?</p>
    <input type="radio" name="vraag7" required value="1"> Historische en culturele thema's<br>
    <input type="radio" name="vraag7" required value="10"> Avontuurlijke en ontdekkingsreisthema's<br>
    <input type="radio" name="vraag7" required value="5"> Fantasie en magische thema's<br>
    <input type="radio" name="vraag7" required value="5"> Technologische en futuristische thema's<br>

    <p>Wat vind je belangrijker bij attracties?</p>
    <input type="radio" name="vraag8" required value="5"> Een verhaal en een meeslepende ervaring<br>
    <input type="radio" name="vraag8" required value="5"> Hoogwaardige speciale effecten en technologie<br>
    <input type="radio" name="vraag8" required value="10"> Snelheid en opwinding<br>
    <input type="radio" name="vraag8" required value="1"> Interactie en betrokkenheid<br>

    <p>Ben je op zoek naar attracties met indrukwekkende speciale effecten, zoals vuurwerk of lichtshows?</p>
    <input type="radio" name="vraag9" required value="10"> Ja<br>
    <input type="radio" name="vraag9" required value="5"> Nee<br>

    <p>Geniet je van attracties die draaien om teamwork en samenwerking?</p>
    <input type="radio" name="vraag10" required value="5"> Ja<br>
    <input type="radio" name="vraag10" required value="10"> Nee<br>

    <p>Heb je liever attracties met water, zoals waterglijbanen, of vermijd je liever natte attracties?</p>
    <input type="radio" name="vraag11" required value="10"> Ik geniet van attracties met water<br>
    <input type="radio" name="vraag11" required value="5"> Ik vermijd liever natte attracties<br>

    <p>Heb je een voorkeur voor attracties met een specifiek thema, zoals sciencefiction of fantasie?</p>
    <input type="radio" name="vraag12" required value="5"> Ja<br>
    <input type="radio" name="vraag12" required value="10"> Nee<br>

    <input type="submit" value="Verstuur">
</form>
</body>
</html>