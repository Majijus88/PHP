<?php 
  echo "<h1>Følgende informasjon er sendt til kokken:</h1>\n";
  echo "<p><strong>Forrett</strong>: " . $_COOKIE['frett'] . "<br />\n";
  echo "<strong>Hovedrett</strong>: " . $_COOKIE['hrett'] . "<br />\n";
  echo "<strong>Dessert</strong>: " . $_COOKIE['dessert'] . "<br /> \n";
  echo "</p>";
  echo "<p>Bon apetit! - og velkommen igjen :)</p>";
  echo "<br>";
  echo "<a href='1_Forrett.php'>Tilbake til forsiden</a>";
?>