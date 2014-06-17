<?php
$req = mysql_query('SELECT Projet FROM Users WHERE Projet ="'.$_POST['project'].'"');
$result = mysql_num_rows($req);
$trouver = false;
if ($result != 0) {
$trouver = true;
}
?>