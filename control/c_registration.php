<?php
// connection a la bdd
include('../modele/m_connection_bdd.php');

// On verifie que le pseudo est libre 
include('../modele/m_verif_log.php');

// si le pseudo est libre on verifie que le mail est libre
if (!$trouver) {
	include('../modele/m_verif_mail.php');
	
	// Si le pseudo et le mail sont libres on verifie que les mdp et le mdp verif corespondent
	if (!$trouver) {
			//echo $_POST['project'];
			//echo $_POST['password'];
			//echo $_POST['email'];
		// si les mdp corespondent on ajoute le membre a la bdd
		if($_POST['password'] == $_POST['password2']) {
			echo "petit poney";
			//$projet = $_POST['project'];
			//$Pwd = $_POST['password'];
			//$Pwd = sha1($Pwd);
			//$email = $_POST['email'];
			//$id = "";
			
			//$sql = 'INSERT INTO Users (ID_User, Project, Mail, Password) 
			//VALUES ('',"'.$projet.'","'.$Pwd.'","'.$mail.'")';
			//mysql_query($sql);

			//include('../modele/m_add_member.php');
	
			//header('Location: ../vue/v_login.php');
			$_SESSION = array();
			session_destroy();
		} else {
			echo 'Le mot de passe et la verification ne correspondent pas!<br>';
			include('../index.php');
		}
	} else {
		echo "Ce mail n'est plus disponible<br>";
		include('../index.php');
	}
} else {
	echo "Ce nom de compte n'est plus disponible<br>";
	include('../index.php');
}
?>