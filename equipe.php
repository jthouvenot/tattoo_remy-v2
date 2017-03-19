<div class="large-12 columns columns">
	<div class="rslides_container">
		<ul class="rslides transparent-btns transparent-btns2">
			<li class="slide"><img src="img/equipe/latroupe.png" alt="La troupe"></li>
			<li class="slide"><img src="img/equipe/remy.jpg" alt="Rémy"></li>
			<li class="slide"><img src="img/equipe/tattootaz2_min.jpg" alt="Rémy & Taz"></li>
			<li class="slide"><img src="img/equipe/sandra.jpg" alt="Sandra"></li>
			<li class="slide"><img src="img/equipe/jeremy.jpg" alt="Jérémy"></li> 
 			<li class="slide"><img src="img/equipe/ben.jpg" alt="Ben"></li>
		</ul>
	</div>
</div>	
<script src="js/responsiveslides.min.js"></script>
<script>
 	$(function() {
			$(".rslides").responsiveSlides({
			auto: true,             // Boolean: Animate automatically, true or false
			speed: 500,            // Integer: Speed of the transition, in milliseconds
			timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
			pager: true,           // Boolean: Show pager, true or false
  			nav: true,             // Boolean: Show navigation, true or false
			random: false,          // Boolean: Randomize the order of the slides, true or false
			pause: false,  
			//maxwidth: 700,			// Boolean: Pause on hover, true or false
			namespace: "transparent-btns"
			//pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			//prevText: "Previous",   // String: Text for the "previous" button
			//nextText: "Next",       // String: Text for the "next" button
			//maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
			//navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
			//manualControls: "",     // Selector: Declare custom pager navigation
			//namespace: "rslides",   // String: Change the default namespace used
			//before: function(){},   // Function: Before callback
			//after: function(){}     // Function: After callback
		});
	}); 
</script>