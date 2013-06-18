<?php

	 	$addr_serveur = 'localhost';
		$login_mysql = 'yoogi_tlv';
		$pass_mysql = 'tlv83';
		$nom_bdd = 'yoogi_tlv';
		
		
		$link = mysql_connect($addr_serveur ,$login_mysql, $pass_mysql);
		if (!$link) {
		   die('Impossible de se connecter  : ' . mysql_error());
		}else{
			//echo "connect&eacute; en persistant";
		}
		
		$db_selected = mysql_select_db($nom_bdd , $link);
		if (!$db_selected) {
		   die ('Impossible de sélectionner la base de données : ' . mysql_error());
		}

// id Page = 15 --> Tarifs FR
		$page=15;
		$strSqlSelectPage = "select *  from pages where id_pages = ".$page;
		$resultSelectPage = mysql_query($strSqlSelectPage) or die ("Erreur de lecture de la page : ".mysql_error());
		$rowPage = mysql_fetch_array($resultSelectPage);
	
		echo $rowPage['contenu'];



?>
