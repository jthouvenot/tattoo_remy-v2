<head>
	<link rel="stylesheet" href="css/photoswipe/photoswipe.css">
	<script type="text/javascript"src="js/klass.min.js"></script>
	<script type="text/javascript"src="js/code.photoswipe-3.0.5.min.js"></script>
</head>
<div class="titre-galerie">Jérémy</div>
<div id="galerie" class="column" style="margin-top:10px;">
		<ul id="Gallery">
		<?php
		for ($i = 1; $i <= 19; $i++) {
			$nomImg="";
			if($i<10){$nomImg='00'.$i;}
			else if($i<100){$nomImg='0'.$i;}
			else{$nomImg=$i;}
			$nomImgMin=$nomImg."_min.jpg";
			$nomImg.=".jpg";
			echo  '<li style=""><a href="img/galeries/jeremy/jeremy'.$nomImg.'" style="">
            <img src="img/galeries/jeremy/min/jeremy'.$nomImgMin.'" class="img-gal" alt=""/></a></li>';
		}
		?>
		</ul>
</div>
<script>
	$(document).ready(function(){ 
			var myPhotoSwipe = $("#Gallery a").photoSwipe(
			{ enableMouseWheel: true ,
			enableKeyboard: true,
			allowRotationOnUserZoom: true,
			captionAndToolbarShowEmptyCaptions:false,
			
			});
	});
</script>

<!--
<head>
	<link rel="stylesheet" href="css/photobox.css">
	<link rel="stylesheet" href="css/photobox.ie.css">
	<script type="text/javascript"src="js/photobox.js"></script>
</head>
<div class="large-12 columns columns">
	<div id='gallery-photobox'>
		<--?php
		for ($i = 1; $i <= 19; $i++) {
			$nomImg="";
			if($i<10){$nomImg='00'.$i;}
			else if($i<100){$nomImg='0'.$i;}
			else{$nomImg=$i;}
			$nomImg.=".jpg";
			echo  '<a href="img/galeries/jeremy/jeremy'.$nomImg.'">';
			echo  '<img src="img/galeries/jeremy/s_jeremy'.$nomImg.'" alt="" /></a>';
		}
		?>
	</div>
</div>
	<script>
		$('#gallery-photobox').photobox('a');
		// or with a fancier selector and some settings, and a callback:
		$('#gallery-photobox').photobox('a:first', { thumbs:false, time:0 }, imageLoaded);
		function imageLoaded(){
			console.log('Chargement...');
		}
	</script>
-->	
	