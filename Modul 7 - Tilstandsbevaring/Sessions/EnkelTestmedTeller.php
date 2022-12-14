<?php

session_start();
if( isset($_SESSION['teller']) ) {
    $_SESSION['teller'] ++;
}
else {
    $_SESSION['teller'] = 1;
}

$teller = $_SESSION['teller']; 

echo "<h3> Ved hjelp av en teller..</h3>" ;
echo "<p> Har vi kommet frem til at du har besøkt denne siden<strong> " . $teller .  " </strong> ganger i denne øken</p>";
?>