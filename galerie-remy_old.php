<head>
	<link rel="stylesheet" href="css/s-gallery-styles.css">
	<!-- link to the screenfull.js script before the link to the plugin script -->
	<script src="js/screenfull.min.js"></script>
	<script src="js/galleria-1.2.9.min.js"></script>
</head>
<div class="large-12 columns columns">
	<div id="galleria">
		<?php
		for ($i = 1; $i <= 150; $i++) {
			$nomImg="";
			if($i<10){$nomImg='00'.$i;}
			else if($i<100){$nomImg='0'.$i;}
			else{$nomImg=$i;}
			$nomImg.=".jpg";
			echo  '<img src="img/galeries/remy/remy'.$nomImg.'" alt=""/>';
		}
		?>
	</div>
</div>
<script>
    Galleria.loadTheme('css/themes/classic/galleria.jim.js');
	Galleria.configure({
		lightbox: true
	});
	Galleria.run('#galleria');
</script>	