<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
		<div class="site-info row">
			<div class="col-md-12">
				<h4>Banyan Studio</h4>
				<div class="row">
					<div class="col-md-4">
			<span class="small-icon icon icon-basic-mail-open-text"></span> 
			<a href="mailto:miguel@banyanstudio.net">miguel@banyanstudio.net</a>

					</div>
					<div class="col-md-4">
			</br>
			 
			© 2015 Banyan Studio.</br>All rights reserved.
			
			</div>
			
			<div class="col-md-4">
			
			<span class="small-icon icon icon-basic-smartphone"></span> 
			206-715-8088
			
			</div>

				</div>
			
			
					</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>


<script type="text/javascript">
    
   jQuery(document).ready(function () {
	    
	 //   setTimeout(function(){
	//	jQuery('body').addClass('loaded');
	//	jQuery('h1').css('color','#222222');
//	}, 3000);

	    
	    
	    
	   	    jQuery(window).scroll(function(){
		
    var fromTopPx = 100; // distance to trigger
    var scrolledFromtop = jQuery(window).scrollTop();
    if(scrolledFromtop > fromTopPx){
        jQuery('header#masthead.site-header nav.affix').addClass('scrolled');
    }else{
        jQuery('header#masthead.site-header nav.affix').removeClass('scrolled');
    }
});




jQuery('myModal-<?php the_ID(); ?>').modal({
  keyboard: false
})



	    
	    
	    
	    
	    
           });
</script>    
    
    



</html>
