
<?php
/*****************************************************
 * Sjekket om bruker er innlogget via session-variabel
 * Dersom bruker ikke er innlogget, blir bruker videresent
 * til lokasjonen spesifisert i headerfeletet
/****************************************************/
@session_start(); //@overstyrer feilmelding som kan oppstå om bruker allerede har en aktiv session
function sjekk_autentisert() {
    if ( false == $_SESSION['innlogget']) {
        header("Location: SENDBRUKERHIT.php");		//Her spesifiseres adressen som bruker skal sendes til dersom personen ikke har en aktiv innlogging.
        exit();
    }
}


<?php
/*****************************************************
 * Hensikt: Lage hidden-felter av alt som er i en matrise,
 *          for eksempel $_GET[] eller $_POST[]
 * Merk: Det lages ikke et hidden-felt for felt som starter
 *       med prefikset 'knapp'. (Operatoren not ! er brukt)
/****************************************************/
function bevarInformasjon($mat) {
	foreach($mat as $indeks=>$verdi){
			if( !strstr($indeks, "knapp") ) {
				echo "<input type='hidden' ";
				echo "name='$indeks' value='$verdi' />\n";
			}//if
	}//foreach
}//slutt funksjon
?>

<?php
/*****************************************************
 * Hensikt: Skrive ut innholdet av en matrise eller en
 *          variabel. Fungerer med vanlige matriser og
 *          alle superglobale matriser.
 * Merk: Bruker HTML-elementet PRE for � f� en oversiktlig
 *       utskrift av innholdet. Passer derfor perfekt til
 *       debugging
/****************************************************/
function dumpInnhold($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
}
?>