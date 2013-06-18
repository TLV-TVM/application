<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>TLV TVM</title>
	
	<meta name="viewport" content="height=device-height,width=device-width,initial-scale=1.0,maximum-scale=1.0, user-scalable=no"  >
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="img/jqt_startup.png" />
	<link rel="apple-touch-icon" href="img/jqtouch.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="img/jqtouch.png" /><!-- 72x72-->
	<link rel="apple-touch-icon" sizes="114x114" href="img/jqtouch.png" /><!-- 114x144-->

	
	
	
	<!--<link rel="stylesheet" href="js/jqm/jquery.mobile-1.3.1.css" />-->
	
	
</head>

<body class="portrait">

<!-- SPLASH -->


<!-- HOME -->
<div data-role="page" class="page-tlv" id="home">
	
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png"  height="45" /></div>
		<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
	</div>
	  
	<div data-role="content" class="page-tlv">
		<div id="nav-home-tlv">
			<div class="bouton">
				<a href="#horaires" data-transition="flip"><img src="img/btn/btn_horaires.png" border="0" /></a>
			</div>
			<div class="bouton">
				<a href="#tarifs" data-transition="flip"><img src="img/btn/btn_tarifs.png" border="0" /></a>
			</div>
			<div class="bouton">
				<a href="#infosTlv" data-transition="flip"><img src="img/btn/btn_infos.png" border="0" /></a>
			</div>
			<div class="bouton">
				<a href="#alertes" data-transition="flip"><img src="img/btn/btn_alertes.png" border="0" /></a>
			</div>
			<div class="bouton">
				<a href="#geoLoc" data-transition="flip"><img src="img/btn/btn_geoloc.png"  border="0"/></a>
			</div>
			<div class="bouton">
				<a href="#meteoTLV"  data-transition="flip"><img src="img/btn/btn_meteo.png" border="0" /></a>
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
	  
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>
<!-- FIN HOME -->


<!-- HORAIRES -->
<div data-role="page" id="horaires" data-add-back-btn="true">
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png"  height="45" /></div>
		<a data-role="button" data-direction="reverse" data-rel="back" href="#home" data-icon="arrow-l" data-iconpos="left" style="margin-top:4px">Accueil</a>
		<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
	</div>
	
	<div data-role="content" class="page-content-tlv">
		
		<label for="lieu_depart">D&eacute;part de :</label>
      	<select name="lieu_depart"  id="lieu_depart">
			<option value="1" >Tour Fondue / Porquerolles</option>
			<option value="2" >Hy&egrave;res / Port Cros / Le Levant</option>
			<option value="3" >Circuit des 2 &Icirc;les</option>
			<option value="4" >Vision sous-marine</option>
		</select>
		
		<label for="date_depart">Horaires du :</label>
		<input value="<?=date("d/m/Y")?>" name="date_depart" id="date_depart" type="date" data-role="datebox" data-options='{"mode": "calbox","useFocus": true, "calShowWeek": true}'>
		<p>&nbsp;</p>
		<div id="bouton_submit"><input type="button" class="bt-valid" value="Consulter les horaires" id="btnHoraireGo" /></div>
		<div id="infoHoraire">&nbsp;</div>
	</div>
	
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>
<!-- FIN HORAIRES -->


<!-- TARIFS -->
<div data-role="page" id="tarifs" data-add-back-btn="true">
	
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png"  height="45" /></div>
		<a data-role="button" data-direction="reverse" data-rel="back" href="#home" data-icon="arrow-l" data-iconpos="left" style="margin-top:4px">Accueil</a>
		<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
	</div>
	
	<div data-role="content" class="page-content-tlv">
		
	</div>
	
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>
<!-- FIN TARIFS -->


<!-- ALERTES -->
<div data-role="page" id="alertes" data-add-back-btn="true">
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png" height="45" /></div>
		<a data-role="button" data-direction="reverse" data-rel="back" href="#home" data-icon="arrow-l" data-iconpos="left" style="margin-top:4px">Accueil</a>
      	<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
	</div>
	
	<div data-role="content" class="page-content-tlv">
		<H1>Alertes Info TLV</H1>
		
		<img src="images/Visuel-Paoramique-Intemperies.jpg" class="img_border" width="100%" />
		
		<div class="content">
		
		</div>
	</div>
	
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>
<!-- FIN ALERTES -->


<!-- infosTlv -->
<div data-role="page" id="infosTlv" data-add-back-btn="true">
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png"  height="45" /></div>
		<a data-role="button" data-direction="reverse" data-rel="back" href="#home" data-icon="arrow-l" data-iconpos="left" style="margin-top:4px">Accueil</a>
		<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
	</div>
	
	<div data-role="content" class="page-content-tlv">
		<ul data-role="listview" data-divider-theme="a" data-inset="true">
			<li data-role="list-divider" role="heading">Plus d'infos sur</li>
			<li data-theme="c">
				<a href="#page2" data-transition="slide">Accessibilit&eacute;</a>
			</li>
			<li data-theme="c">
				<a href="#page3" data-transition="slide">R&eacute;glementation</a>
			</li>
			<li data-theme="c">
            	<a href="#page4" data-transition="slide">Le parc National</a>
        	</li>
    	</ul>
	</div>
  
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>

<!-- Page Accessibilité -->
<div data-role="page" id="page2" data-add-back-btn="true">
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png"  height="45" /></div>
		<a data-role="button" data-direction="reverse" data-rel="back" href="#infosTlv" data-icon="arrow-l" data-iconpos="left" style="margin-top:4px">Retour</a>
		<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
	</div>
	
	<div data-role="content" class="page-content-tlv">
		&Eacute;quipements pour les diff&eacute;rents types de handicaps<br /><br />
		Au d&eacute;part de la Tour Fondue, en direction de Porquerolles:<br /><br />
		Trois bateaux sont &eacute;quip&eacute;s d'une rampe permettant l'acc&egrave;s des personnes en fauteuil roulant manuel ou &eacute;lectrique.<br /><br />
		Au d&eacute;part du port d’Hy&egrave;res en direction de Port Cros et du Levant :<br /><br />
		Il faut se renseigner au <strong>04 94 57 44 07.</strong><br /><br />
		Tarif sp&eacute;cial pour PMR sur pr&eacute;sentation de la carte d'invalidit&eacute;.<br /><br />
		Le circuit "vision sous-marine" n'est cependant pas accessible aux personnes en fauteuil roulant et malvoyantes.
	</div>
	
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>
<div data-role="page" id="page3" data-add-back-btn="true">
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png"  height="45" /></div>
		<a data-role="button" data-direction="reverse" data-rel="back" href="#infosTlv" data-icon="arrow-l" data-iconpos="left" style="margin-top:4px">Retour</a>
		<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
	</div>
	
	<div data-role="content" class="page-content-tlv">
		<h2>La r&eacute;glementation de l'&icirc;le de Port-Cros</h2>
		<p>Un parc national est un <strong>territoire d'exception</strong>, ouvert &agrave; tous sous la responsabilit&eacute; de chacun. Il est <strong>prot&eacute;g&eacute; par une r&eacute;glementation</strong>. Merci de la respecter.</p>
		<h3>R&egrave;glementation</h3>
		<p>
			<ul>
				<li><strong>Pas de feu ni de cigarette en dehors du village</strong>, pour pr&eacute;venir l'incendie et garder les plages propres.</li>
				<li><strong>Pas de camping ni de bivouac</strong></li>
				<li><strong>Pas de v&eacute;hicule motoris&eacute; ni de v&eacute;lo</strong> &agrave; l'exception des v&eacute;hicules de service ou autoris&eacute;s, l'&icirc;le est r&eacute;serv&eacute;e aux pi&eacute;tons.</li>
				<li><strong>Pas de d&eacute;chets en dehors des conteneurs</strong>, pour ne pas alt&eacute;rer les milieux naturels et les paysages.</li>
				<li><strong>Pas de bruit ni de d&eacute;rangement</strong> pour pr&eacute;server le caract&egrave;re des lieux.</li>
				<li><strong>Pas d'arme</strong>, la chasse est interdite.</li>
				<li><strong>Pas de cueillette ni de pr&eacute;l&egrave;vement</strong> pour conserver la diversit&eacute; biologique.</li>
				<li><strong>Pas de chien</strong> pour maintenir la tranquillit&eacute; de la faune et la salubrit&eacute; des plages. Dans le village, entre le fort du Moulin et la statue de St Joseph, l’acc&egrave;s du chien tenu en laisse est autoris&eacute;.</li>
				<li><strong>Pas de p&ecirc;che de loisir</strong> pour sauvegarder la faune et la flore marines.</li>
				<li><strong>La p&ecirc;che sous-marine, la p&ecirc;che &agrave; l'hameçon et la p&ecirc;che &agrave; pied sont interdites.</strong></li> 
				Seule, la p&ecirc;che &agrave; la tra&icirc;ne est autoris&eacute;e &agrave; plus de 50 m&egrave;tres du rivage, au nord des parall&egrave;les passant par la pointe du Cognet et la Pointe de Port-Man
			</ul>
		</p>
		<h3>Danger Incendie (S&eacute;cheresse + vent = risque accru d'incendie)</h3>
		<p>Pour la s&eacute;curit&eacute; de chacun, les massifs forestiers sont alors ferm&eacute;s (voir la carte) &agrave; la fr&eacute;quentation du public, et la circulation n'est autoris&eacute;e que sur les chemins d'acc&egrave;s aux plages.
	   	<ul>
	   		<li>Se renseigner au 04 89 96 43 43 ou sur internet <a href="www.sigvar.org">www.sigvar.org</a></li>
	   		<li>En cas d'incendie: appeler le 18 ou le 112</li>
	   		<li>Ne pas s'&eacute;loigner de la mer</li>
	   	</ul>
		</p>
		<br />
		<h2>La r&eacute;glementation de l'&icirc;le de Porquerolles</h2>
		<p>L'&icirc;le de Porquerolles est un territoire d'exception, ouvert &agrave; tous sous la responsabilit&eacute; de chacun. Il est prot&eacute;g&eacute; par une r&eacute;glementation. Merci de la respecter.</p>
		<h3>R&eacute;glementation</h3>
		<p>
			<ul>
				<li><strong>Pas de feu ni de cigarette</strong> en dehors du village, pour pr&eacute;venir l'incendie et garder les plages propres.</li>
				<li><strong>Pas de camping ni de bivouac</strong></li>
				<li><strong>Pas de d&eacute;chets en dehors des conteneurs</strong>, pour ne pas alt&eacute;rer les milieux naturels et les paysages</li>
				<li><strong>Pas de bruit ni de d&eacute;rangement</strong> pour pr&eacute;server le caract&egrave;re des lieux.</li>
				<li><strong>Pas de cueillette ni de pr&eacute;l&egrave;vement</strong> pour conserver la diversit&eacute; biologique.</li>
				<li><strong>La circulation des v&eacute;hicules motoris&eacute;s et des v&eacute;los est r&eacute;glement&eacute;e.</strong></li>
				<li>Pour sauvegarder la flore et la faune sauvages, <strong>ne pas quitter le trac&eacute;</strong> des pistes et des sentiers autoris&eacute;s.</li>
				<li>Pour la tranquillit&eacute; de la faune, <strong>les chiens doivent &ecirc;tre tenus en laisse.</strong> Ils sont interdits d'acc&egrave;s sur les plages pour des raisons de salubrit&eacute;.</li>
			</ul>
			Le contenu d&eacute;taill&eacute; de la r&eacute;glementation peut &ecirc;tre consult&eacute; dans les points d'informations du Parc National de Port-Cros et du Conservatoire Botanique National M&eacute;diterran&eacute;en de Porquerolles.
		</p>
		<h3>Danger Incendie (S&eacute;cheresse + vent = risque accru d'incendie)</h3>
		<p>Pour la s&eacute;curit&eacute; de chacun, <strong>les massifs forestiers sont alors ferm&eacute;s</strong> &agrave; la fr&eacute;quentation du public, et la circulation n'est autoris&eacute;e que sur les chemins d'acc&egrave;s au plages.
		<ul>
			<li>Se renseigner au 04 89 96 43 43 ou sur internet <a href="www.sigvar.org">www.sigvar.org</a></li>
			<li>En cas d'incendie: appeler le 18 ou le 112</li>
			<li>Ne pas s'&eacute;loigner de la mer</li>
		</ul>	
		</p>
	</div>
	
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>

<div data-role="page" id="page4" data-add-back-btn="true">
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png"  height="45" /></div>
		<a data-role="button" data-direction="reverse" data-rel="back" href="#infosTlv" data-icon="arrow-l" data-iconpos="left" style="margin-top:4px">Retour</a>
		<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
	</div>
	
	<div data-role="content" class="page-content-tlv">
		<div style="margin: 0 auto 15px; width: 95px;"><img src="images/logo-ParcNationalPortCros.jpg" alt="Parc National Port Cros" /></div>
		<h1>Parc national de Port-Cros, insulaire,  littoral et marin</h1>
		<p>
		Le cœur du Parc national de Port-Cros s’&eacute;tend sur 1 700 ha de terres &eacute;merg&eacute;es et 2 900 ha de surfaces marines. Il comprend une partie de l'&icirc;le Porquerolles, les &icirc;les de Port-Cros, de Bagaud, les &icirc;lots de la Gabini&egrave;re et du Rascas et un p&eacute;rim&egrave;tre marin qui les enserre.
		</p>
		<p>
		Royaume des oiseaux marins, le Parc abrite 144 esp&egrave;ces et offre un milieu propice &agrave; la nidification du Puffin
		cendr&eacute;, esp&egrave;ce migratrice rare dont la colonie de Porquerolles est la plus importante des côtes françaises.
		</p>
		<p>
		180 esp&egrave;ces de poissons y prosp&egrave;rent dont le M&eacute;rou brun 
		Quant &agrave; la flore, 602 esp&egrave;ces terrestres sont r&eacute;pertori&eacute;es dont certaines rares, comme le genêt &agrave; feuille de lin ou end&eacute;miques comme la Dauphinelle de Requien, ainsi que 500 esp&egrave;ces d’algues.
		Une biodiversit&eacute; exceptionnelle et fragile, &agrave; d&eacute;couvrir avec respect. 
		</p>
		<p>EN 2013, LE PARC NATIONAL F&Egrave;TE SON CINQUANTENAIRE</p>
		<a href="http://50ans.portcrosparcnational.fr" target="_blank">http://50ans.portcrosparcnational.fr</a>
	</div>
	
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>

<!-- FIN infosTlv -->


<!-- meteoTLV -->
<div data-role="page" id="meteoTLV" data-add-back-btn="true">
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png"  height="45" /></div>
       	<a data-role="button" data-direction="reverse" data-rel="back" href="#home" data-icon="arrow-l" data-iconpos="left" style="margin-top:4px">Accueil</a>
       	<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
  	</div>
  
  
	<div data-role="content" class="page-content-tlv">
		<h2>M&eacute;t&eacute;o Hyeres / Porquerolles</h2>
     	<div id="descMeteo">
      	
		</div>
		
	</div>
	
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>
<!-- FIN meteoTLV -->


<!-- GEOLOC -->
<div data-role="page" id="geoLoc" data-add-back-btn="true">
	<div data-role="header" data-position="fixed">
		<div id="header-tlv"><img src="images/logo-tlv.png"  height="45" /></div>
		<a data-role="button" data-direction="reverse" data-rel="back" href="#home" data-icon="arrow-l" data-iconpos="left" style="margin-top:4px">Accueil</a>
      	<div id="header-sub-tlv">porquerolles <span class="tiret">-</span> port cros <span class="tiret">-</span> le levant</div>
	</div>
	
	<div data-role="content" class="page-content-tlv">
		<h2>Itin&eacute;raires</h2>
		<p>
			Pour vous rendre &agrave; la Tour Fondue ou au Port de Hy&egrave;res en bus, consultez les horaires sur:<br />
			<a href="#" id="appli" style="width: 78px; margin: 5px auto; display: block;"><img src="images/bus_mistral.png" alt="Application Bus Mistral" style="vertical-align: top;" /></a>
		</p>
		<p>
			<label>De :</label> 
			<div class="ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-right ui-btn-up-c" style="line-height: 38px;font-family: Helvetica,Arial,sans-serif; font-weight: bold; font-size: 16px; border-radius: 1em;">Ma position actuelle</div>
			<input id="from"   type="hidden" value="" />
		</p>
		<p>
			<label>A :</label>
			<select name="endPoint" id="endPoint">
				<option value="43.0822795,6.1569269">Le Port d'Hyeres</option>
				<option value="43.0280560,6.1550942">La Tour Fondue</option>
				<option value="43.003111,6.200658">Embarcad&egrave;re Porquerolles</option>
			</select>
		</p>
		<p>
			<label>Moyen de transport :</label>
			<select id="mode" onchange="calcRoute();">
				<option value="DRIVING">Voiture</option>
				<option value="WALKING">Pieton</option>
				<option value="BICYCLING">V&eacute;lo</option>
			</select>
		</p>
		<div id="bouton_submit">
			<input type="button" id="CalcItin" class="bt-valid"  name="CalcItin"  data-icon="search" value="Voir l'itin&eacute;raire">
		</div>
		<p>&nbsp;</p>
		<div id="itineraireShow" style="color:#FFF"></div><p>&nbsp;</p>
		<div id="laCarte" style="border:1px solid #FFF;height:280px;width:100%;margin:auto"></div>
	</div>
	
	 
  
  
	<div data-role="footer" data-position="fixed" id="footer-tlv"><div class="bgfooterleft">&nbsp;</div><div id="imgfooter"><img src="img/footer.png" id="img-footer" /></div><div class="bgfooterright">&nbsp;</div></div>
  
</div>
<!-- FIN GEOLOC -->



</body>
</html>
