<?php
$projet = $_POST['project'];
$Pwd = $_POST['password'];
$Pwd = sha1($Pwd);
$email = $_POST['email'];
$id = "";
echo "hey je suis un pangolin :D";

$sql = 'INSERT INTO Users (ID_User, Project, Mail, Password) 
VALUES ('',"'.$projet.'","'.$Pwd.'","'.$mail.'")';
mysql_query($sql);
?>