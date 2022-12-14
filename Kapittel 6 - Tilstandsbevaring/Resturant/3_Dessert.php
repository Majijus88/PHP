
<h3>Du må nå til slutt velge deg en dessert </h3>
<form action="4_Oppsummering.php" method="post">
    <select name="dessert">
        <option>Sjokoladekake</option>
        <option>Creme Brulee</option>
        <option>Panacotta</option>
    </select>
    <br>
    <input type="submit" name="knapp" value="Neste"/>

<?php
var_dump($_POST);
//Overfører verdien av forretten
echo "<input type='hidden' value='{$_POST['frett']}' name='frett' />";
//Overfører verdien av hovedretten
echo "<input type='hidden' value='{$_POST['hrett']}' name='hrett' />";

?>
</form>