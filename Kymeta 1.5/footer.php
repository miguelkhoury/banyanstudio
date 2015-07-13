<div class="site-info"><footer id="footer">
<div class=" ">
	
	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
	
  <div class="row">
	  
	 
	  	  <a href="/">Home</a>  &#47; <a href="/careers/">Careers</a> &#47; <a href="/site-map/">Site Map </a>  &#47; Follow us on <a href="https://twitter.com/KymetaCorp" target="_blank">Twitter</a></br></br>
         &copy; <?php echo date('Y') ?> Kymeta Corporation. All rights reserved. The Kymeta logo, the mTenna logo, and mTenna are trademarks of Kymeta Corporation. 
        
    
  </div>
</div>
</footer>
</div>
				
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>


<script type="text/javascript">


jQuery( document ).ready(function( $ ) {

//refresh page on browser resize
//$(window).bind('resize', function(e)
//{
//  if (window.RT) clearTimeout(window.RT);
//  window.RT = setTimeout(function()
//  {
//    this.location.reload(false); /* false to get page from cache */
//  }, 200);
// });





//carousel options

$('.carousel').carousel({
  interval: 5500
  })



});






jQuery(document).ready( function($) {
	
	
	//$('#newscarousel').carousel('pause');
	
	
	 $('#newscarousel').carousel({
    	interval:   5500
	});

	
    $('#timecarousel').carousel({
    	interval:   5500
	});
	
	var clickEvent = false;
	$('#timecarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});





</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/wp-content/themes/Kymeta 1.5/assets/js/jquery.rwdImageMaps.js"></script>

<script>
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
	
	});
</script>

</body>
</html>
