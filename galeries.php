<!--<div class="large-12 columns columns">
	<ul class="inline-list right">
        <li><a href="index.php?p=galerie-remy">Rémy</a></li>
        <li><a href="index.php?p=galerie-jeremy">Jérémy</a></li>
		<li><a href="index.php?p=galerie-ben">Ben</a></li>
      </ul>
</div>-->
<script src="js/jquery.rwdImageMaps.min.js"></script>
<script>
	$(document).ready(function(e) {
		$('img[usemap]').rwdImageMaps();
	});
</script>
<div class="large-12 columns columns">
	<img height="536" width="800" style="display: block; margin-right: auto; margin-left: auto;" alt="galeries" src=./img/galeries/img-galeries.png usemap="#Image-Maps_5201101040941075">
	<map id="_Image-Maps_5201101040941075" name="Image-Maps_5201101040941075" class="imageMap">
		<area shape="poly" coords="202,65,273,66,275,184,348,189,314,297,273,308,225,412,244,431,255,529,143,527,132,414,3,319,183,182," href="index.php?p=galerie-remy" alt="Remy" title="Rémy" onfocus="blur();">
		<area shape="poly" coords="356,188,398,190,413,269,403,308,451,364,463,532,273,534,255,434,281,314,346,293," href="index.php?p=galerie-ben" alt="Ben" title="Ben" onfocus="blur();">
		<area shape="poly" coords="421,92,486,93,523,186,560,182,594,209,700,260,708,346,664,411,627,427,643,514,464,517,456,379,416,114," href="index.php?p=galerie-jeremy" alt="rjeemy" title="Jérémy" onfocus="blur();"> 
	</map> 
  <a class="lien-galerie" style="padding-left:15%;" href="index.php?p=galerie-remy">Rémy</a>
  <a class="lien-galerie" href="index.php?p=galerie-ben">Ben</a>
  <a class="lien-galerie" href="index.php?p=galerie-jeremy">Jérémy</a>
	<br/><br/>
</div>