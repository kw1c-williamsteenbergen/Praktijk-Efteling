<?php
/**
* User: William Steenbergen, Arne Kraaijeveld en Jesse van der Pluim
* Date: 25-3-2024
* File: Navigatie.php
*/

date_default_timezone_set("Europe/Amsterdam")

?>

<div class="header-container">
    <div class="logo">
        <a href="<?php echo $indexNav;?>"><img src="<?php echo $images;?>eftelinglogo.jpg" alt="Efteling Logo" class="logo"></a>
    </div>
    <div class="nav2">
        <nav>
            <ul>
                <li><a href="#">Klantenservice & contact</a></li>
                <li><a href="#">Vacatures</a></li>
                <li><a href="#">Inloggen</a></li>
                <li><a href="#">NL <img src="<?php echo $images;?>vlag.jpg" class="vlag"></a></li>
            </ul>
        </nav>
    </div>
    <nav>
        <ul>
            <li><a href="#">Ontdek het park</a></li>
            <li><a href="#">Plan je bezoek</a></li>
            <li><a href="#">Kom overnachten</a></li>
            <li><a href="<?php echo $vragNav;?>vragenlijst.php">Welke atractie past bij jouw?</a></li>
            <li><a href="#"><img src="<?php echo $images;?>search.webp" class="search"></a></li>
            <li><a href="#" class="button2">Tickets</a></li>
        </ul>
    </nav>
</div>
<img src="<?php echo $images;?>openingplaatje.svg" class="opening"
<section>
    <p class="tijden">
        Vandaag: 10:00 - 19:00 <br> <br> <span>Bekijk alle openingstijden</span> <br><br> <?php echo date("H:i d-m-y"); ?>
    </p>
</section>
