<?php
/**
 * Users: William Steenbergen, Jesse van der pluijm en Arne Kraaijveld
 * Date: 26-3-2024
 * File: index.php
 */
?>

<?php
$indexNav= "";
$vragNav = "pages/";
$style = "./styles/";
$logo = "./images/";
?>


<?php
include "./includes/Header.php";
?>
<?php
include "./includes/Navigatie.php";
?>
<main>
    <!--    div voor de achtergrond foto -->
    <div class="achtergrond">
        <!--       titel-->
        <h1>
            TANDARTS DEN BOSCH
        </h1>
        <!--       iets kleinere tekst dan titel-->
        <h2>
            Uw tandarts in Den Bosch e.o. voor reguliere tandheelkunde en implantaten
        </h2>
        <!--       paragraaf-->
        <p>
            Betrouwbaar. Bereikbaar. Betaalbaar.
        </p>

        <btn class="inschrijven">
            INSCHRIJVEN
        </btn>
        <btn class="afspraak">
            AFSPRAAK MAKEN
        </btn>
        <br>
    </div>
</main>
</body>
</html>