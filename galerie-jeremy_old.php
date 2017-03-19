<head>
	<link rel="stylesheet" href="css/s-gallery-styles.css">
	<!-- link to the screenfull.js script before the link to the plugin script -->
	<script src="js/screenfull.min.js"></script>
	<script src="js/s-gallery-scripts.js"></script>
</head>
<div class="large-12 columns columns">
<div id="gallery-container">
<ul class="items--small">
	<?php
		for ($i = 1; $i <= 19; $i++) {
			$nomImg="";
			if($i<10){$nomImg='00'.$i;}
			else if($i<100){$nomImg='0'.$i;}
			else{$nomImg=$i;}
			$nomImg.=".jpg";
			echo  '<li class="item"><a href="#"><img src="img/galeries/jeremy/s_jeremy'.$nomImg.'" alt="" /></a></li>';
		}
	?>
  </ul>
  <ul class="items--big">
	<?php
		for ($i = 1; $i <= 19; $i++) {
			$nomImg='';
			if($i<10){$nomImg='00'.$i;}
			else if($i<100){$nomImg='0'.$i;}
			else{$nomImg=$i;}
			$nomImg.=".jpg";
			echo  '<li class="item--big"><a href="#"><img src="img/galeries/jeremy/jeremy'.$nomImg.'" alt="" /></a></li>';
		}
	?>
  </ul>
  <div class="controls">
    <span class="control icon-arrow-left" data-direction="previous"></span> 
    <span class="control icon-arrow-right" data-direction="next"></span> 
    <span class="grid icon-grid"></span>
    <span class="fs-toggle icon-fullscreen"></span>
  </div>
</div>
</div>
<script>
	$(document).ready(function(){
		$('#gallery-container').sGallery({
			fullScreenEnabled: true //default is false
		});
	});
</script>	