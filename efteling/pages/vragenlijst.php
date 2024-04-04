<?php
/**
 * User: William Steenbergen, Arne Kraaijeveld en Jesse van der Pluim
 * Date: 25-3-2024
 * File: Vragenlijst.php
 */
?>

<form action="result.php" method="get">
    <h3>
        Hoe vaak poets je per dag?
    </h3>
    <input type="radio" name="vraag1" value="10" required>
    <label>2 keer per dag</label>
    <input type="radio" name="vraag1" value="5" required>
    <label>1 keer per dag</label>
    <input type="radio" name="vraag1" value="-10" required>
    <label>minder dan 1 keer per dag</label>