<?php

/**
* ChangelogModule
* Auth Class
* @Nekkathecat
* Made : 19/07/2013
**/


    //Authentification Function :: /changelog/changelog
    function Auth() {
    //POST REQUEST NAME 
	if (isset($_POST['logon'])) {
			// SECURE FORMS
			$compte = htmlspecialchars(mysql_escape_string($_POST['login']));
			$password = htmlspecialchars(mysql_escape_string($_POST['passlog']));
			// MYSQL QUERY
			$requete = mysql_query("SELECT * FROM accounts WHERE account = '".$compte."'");
			$donnees = mysql_fetch_array($requete);
			if ($password == $donnees['pass']){
			//DEFINE SESSION VARS
				$_SESSION['login'] = $donnees['account'];
				$_SESSION['pseudo'] = $donnees['pseudo'];
				$_SESSION['guid'] = $donnees['guid'];
				//REDIRECTION
				echo'<meta http-equiv="refresh" content="3; URL=#">';
			}
			else {
			//ERROR
            echo'<div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Error</h4>
            An error during the identification
            </div>';
               }
			
            }
			
			}
				