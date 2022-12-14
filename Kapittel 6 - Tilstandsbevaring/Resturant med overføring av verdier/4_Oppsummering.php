<?php
	echo "<h3>Menyen er klar!</h3>";
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
?>