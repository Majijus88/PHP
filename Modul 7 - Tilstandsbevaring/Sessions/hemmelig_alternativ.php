<?php
@session_start();
function sjekk_autentisert() {
    if ( false == $_SESSION['innlogget']) {
        header("Location: InnloggingSessionVariabler.php");
        exit();
    }
}

sjekk_autentisert();
echo "Her var det masse hemmelig som du får se fordi du er innlogget!";
echo"<a href='Utlogging.php'> Logg ut</a>";
