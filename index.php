<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="fr" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" content="tattoo,Tattoo,tatouage,Tatouage,tatoo, Tatoo,tatou,tattou,Remy,remy,remi,etampes,Etampes, exposition,soin,jeremy,jeremi,ben,sandra, piercing, piercing,hygiene,91,essonne,tatoueurs,tatoueur,modele,dessin,paris,photos,photo,91,essonne">
	<meta name="description" content="Site de la boutique de tatouage Tattoo Rémy d'Etampes.">
	<title>Tattoo R&eacute;my</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/styles.css"/>
    <script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/jquery.js"></script>
</head>

<body>

<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$listePages = [
		"accueil",
		// "equipe",
		"galeries",
		// "galerie-remy",
		// "galerie-ben",
		// "galerie-jeremy",
		"magasin",
		"liens",
      "piercing"
	];

	$pageDemande="accueil";
	if(isset($_GET['p'])){
		if (in_array($_GET['p'], $listePages)) {$pageDemande=$_GET['p'];}
		//else{echo "Page Inexistante";}
	}
?>

<div class="wrapper">
<!-- Header and Nav -->
	<div class="row row-header">
		<div class="large-12 columns" style="">
		<nav class="top-bar" data-topbar data-options="is_hover: false">
			<ul class="title-area">
    			<li class="name">
      				<a href="index.php?p=accueil"><img src="img/img-logo.png" id="img-logo" /></a>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  			</ul>
  			<section class="top-bar-section">
   				<!-- Right Nav Section -->
    			<ul class="right">
     				<li><a href="index.php?p=accueil">Accueil</a></li>
						<li class="divider"></li>
    				<!-- <li><a href="index.php?p=equipe">Equipe</a></li>
						<li class="divider"></li> -->
    				<li><a href="index.php?p=galeries">Galeries</a></li>
						<li class="divider"></li>
						<li><a href="index.php?p=magasin">Magasin</a></li>
						<li class="divider"></li>
	    			<li><a href="index.php?p=piercing">Piercing</a></li>
						<li class="divider"></li>
 						<li><a href="index.php?p=liens">Liens</a></li>
    			</ul>
			</section>
		</nav>
		</div>
	</div>
<!-- End Header and Nav -->

	<div class="row row-corps" style="">
		<?php include($pageDemande.'.php'); ?>
	</div>
	<div class="push" style=""></div>
</div>
    <script src="js/foundation/foundation.js"></script>
	<script src="js/foundation/foundation.topbar.js"></script>
    <script>
      $(document).foundation();
    </script>
	<!-- On insere le fichier google analytics-->
	<?php require_once 'analytics.php'; ?>
</body>
</html>
