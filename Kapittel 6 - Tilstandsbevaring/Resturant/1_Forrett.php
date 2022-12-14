<?php
if( isset($_COOKIE['frett']) ) {
    echo "<h3>Menyen er allerede klar:</h3>\n";
	echo "<strong>Forrett</strong>: " . $_COOKIE['frett'] . "<br />\n";
	echo "<strong>Hovedrett</strong>: " . $_COOKIE['hrett'] . "<br />\n";
	echo "<strong>Dessert</strong>: " . $_COOKIE['dessert'] . " \n";
    echo "<form action='5_Gjenta.php' method='post'>\n";
	echo "\t<input type='submit' value='Send til kokken' />\n";
	echo "</form>\n\n";
}
?>

<h3> Først må du velge en forrett</h3>
<form action="2_Hovedrett.php" method="post">
    <select name= "frett">
        <option>Tørre brødskiver</option>
        <option>Kyllingbiter med Teriyakisaus</option>
        <option>Bruchetta med tomat</option>
    </select>
    <br>
    <input type="submit" name="knapp" value="Neste" />
</form>