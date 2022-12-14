<?php
session_start();
if(isset($_POST['knapp']) ){
    if ( $_POST['bruker'] == "jens" && $_POST['passord'] == "1234") {
        $_SESSION['navn'] = ucfirst($_POST['bruker']);
        $_SESSION['innlogget'] = true;
        include "hemmelig_alternativ.php";
    }
    else {
        header("Location: {$_SERVER['PHP_SELF']}");
        exit;
    }
}
else {
?>
<h3>Du må logge inn</h3>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
<table>
<tr><td>Brukernavn:</td>
<td><input type="text" name="bruker" /> </td></tr>
<tr><td>Passord:</td><td>
<input type="password" name="passord" size="5" /> </td></tr>
<tr><td colspan="2"><input type="submit" name="knapp" /> </td>
</tr></table></form>
<?php
}
?>