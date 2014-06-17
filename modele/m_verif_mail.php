<?php
$req = mysql_query('SELECT Mail FROM Users WHERE Mail ="'.$_POST['email'].'"');
$result = mysql_num_rows($req);
$trouver = false;
if ($result != 0) {
$trouver = true;
}
?>