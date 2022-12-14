<?php
	session_start();
	//@session_start(); //@ gjør at evt. feilmelding ikke vises
	if ( isset($_SESSION['innlogget']) ) {
		echo "<form action='Utlogging.php' method='post'>";
		echo "<p>Du er logget inn " . $_SESSION['navn'] . "</p>";
		echo "Velkommen til dette lukkede området :)";
		echo "<br>";
		echo "Om du ønsker å logge ut så kan du trykke på knappen under:<br>";
		echo "<input type='submit' name='knapp' value='Logg ut' />";

	}
	else {
		include "InnloggingSessionVariabler.php"; //viser skjema for innlogging
	}
?>