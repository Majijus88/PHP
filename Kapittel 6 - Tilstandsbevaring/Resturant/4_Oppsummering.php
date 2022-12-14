<?php
include "G:\WAMP\www\PHP\GitHub PHP\Funksjoner.inc.php";
if ( isset($_POST['lagre']) ) {
	//Lagrer informasjonen i en uke
	setcookie("frett", $_POST['frett'], time() +3600 *24*7);
	setcookie("hrett", $_POST['hrett'], time() +3600*24*7);
	setcookie("dessert", $_POST['dessert'], time() +3600*24*7);
	echo "<h3>Denne menyen ble lagret</h3>";
} 
else {
	?>
	<h3>Menyen er klar!</h3>
	<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
	<input type="submit" name="lagre" value="Lagre menyen" />

	<?php
	bevarInformasjon($_POST);
}
	$tekst = "<p>Du har valgt:</p>\n";
	$tekst .= "<blockquote>\n";
	$tekst .=  "\tForrett: " . $_POST['frett'] . "<br />\n";
	$tekst .=  "\tHovedrett: " . $_POST['hrett'] . "<br />\n";
	$tekst .=  "\tDessert: " . $_POST['dessert'] . "<br />\n";
	$tekst .=  "</blockquote>";
	$tekst .= "<p>Velbekomme!</p>";
	echo $tekst; //viser informasjonen til brukeren

	/* kommentert ut med vilje for � ikke spamme en evt. kokk!
	mail("kokken@restaurant.no",
				"Bestilling av mat den " . date("l d.m.Y"),
				$tekst,
				"From: webmaster@{$_SERVER['SERVER_NAME']}"
				); //slutt p� e-post med riktig informasjon
	*/
	echo "<p>Informasjonen er nå sendt på epost til kokken</p>";
	echo "<a href='1_Forrett.php'>Tilbake til forsiden</a>";

?>