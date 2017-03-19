<head>
	<link rel="stylesheet" href="css/photoswipe/photoswipe.css">
	<script type="text/javascript" src="js/klass.min.js"></script>
	<script type="text/javascript" src="js/code.photoswipe-3.0.5.min.js"></script>
</head>
<div class="titre-galerie">Rémy</div>
<div id="galerie" class="column" style="margin-top:10px;">
		<ul id="Gallery">
		<?php
			for ($i = 1; $i <= 150; $i++) {
				$nomImg="";
				if($i<10){$nomImg='00'.$i;}
				else if($i<100){$nomImg='0'.$i;}
				else{$nomImg=$i;}
				$nomImgMin=$nomImg."_min.jpg";
				$nomImg.=".jpg";
				echo  '<li style=""><a href="img/galeries/remy/remy'.$nomImg.'" style="">
				<img src="img/galeries/remy/min/remy'.$nomImgMin.'" class="img-gal" alt=""/></a></li>';
			}
		?>
		</ul>
</div>
<script>
	$(document).ready(function(){ 
			var myPhotoSwipe = $("#Gallery a").photoSwipe(
			{ 
				enableMouseWheel: true ,
				enableKeyboard: true,
				allowRotationOnUserZoom: true,
				captionAndToolbarShowEmptyCaptions:false,
			});
	});
</script>