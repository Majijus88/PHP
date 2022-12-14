
<h3>Du må nå velge deg en hovedrett </h3>
<form action="3_Dessert.php" method="post">
    <select name="hrett">
        <option>Biff med Pommes Frittes</option>
        <option>VeganerSuprise</option>
        <option>Laks med Paste og Pesto</option>
    </select>
    <br>
<input type="submit" name="knapp" value="Neste"/>

<?php

var_dump($_POST);
//Overfører verdien fra valgt forrett som et skjult element
echo "<input type='hidden' value='{$_POST['frett']}' name='frett' />";

?>
