<?php

	/*$addr_serveur = 'localhost';*/
	$addr_serveur = '46.105.39.55';
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
	
	
	if($_GET['page'] == 'tarifs'){
			
		// id Page = 15 --> Tarifs FR
		$page=15;
		$strSqlSelectPage = "select *  from pages where id_pages = ".$page;
		$resultSelectPage = mysql_query($strSqlSelectPage) or die ("Erreur de lecture de la page : ".mysql_error());
		$rowPage = mysql_fetch_array($resultSelectPage);
	
		echo $rowPage['contenu'];
		
	} else if($_GET['page'] == 'alertesInfo'){
		$strSqlSelectActuVerif = "select * from alerte_info  where publier = 1  and id_langue=1  order by date_alerte_info desc ";
		$resultSelectActuVerif = mysql_query($strSqlSelectActuVerif) or die ("Erreur de lecture des actualit&eacute;s");
			
		if($nbActu = mysql_num_rows($resultSelectActuVerif)>0){
				
			while($rowActu = mysql_fetch_array($resultSelectActuVerif)){
		?>
                      
        <p>
        	<h3 style="color:#F00;margin:0px" >
				<? if($rowActu['lien_next']){
	
						$lienActu = "";
						$lienActu = UrlRewriter(strtolower(stripslashes($rowActu['titre'])));
						
						$lienActu = $lienActu."-0-0-0-".$rowActu['id_alerte_info'].".html";
						$lienActu =str_replace("--","-",$lienActu);
				?>
				<a href="<?=$lienActu?>"  class="iframe"><?=stripslashes($rowActu['titre'])?></a>
	            <? }else{ ?>
	            	<?=stripslashes($rowActu['titre'])?>
	            <? } ?>
            </h3>
            <span class="date"><strong><?=FlipDate($rowActu['date_crea'])?></strong></span>
        </p>
        <p><?=stripslashes($rowActu['chapeau'])?></p>
        <? if($rowActu['lien_next']){
			$lienActu = "";
			$lienActu = UrlRewriter(strtolower(stripslashes($rowActu['titre'])));
			
			$lienActu = $lienActu."-0-".$rowActu['id_actualite'].".html";
			$lienActu =str_replace("--","-",$lienActu);
		?>
		<!--<p class="suite" align="right"><a href="<?=$lienActu?>"  class="iframe">&gt;  Lire la suite</a></p>--> 
		<? } ?>
		&nbsp;
 		<?	}
		} else { ?>
			<p align="center">- Aucune alertes pour le moment -</p>	
		<? }
	}
?>
