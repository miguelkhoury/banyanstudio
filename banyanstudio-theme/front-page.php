<?php
/**
 * Template Name: Front Page
 *
  */

get_header(); ?>

<?php 	echo do_shortcode('[parallax-scroll id="5264"]')  ?>
	
	<div id="primary" class="content-area">
		<main id="main" class=" site-main " role="main">
			
	
	


<div class="container-fluid">

			<div class="row section nopad" id="portfolio">

			
				<?php get_template_part( 'content', 'portfolio' ); ?>

				

	
			
			
			</div>
</div><!-- end section -->



			
<div class="container-fluid">			
			
			<div class="row section" id="about">

			
				<?php get_template_part( 'content', 'about' ); ?>

				

		
			
			
			</div>
</div><!-- end section -->
			
		
			
<div class="container-fluid">			
			
			
			
			
			
			<div class="row section" id="contact">

		
				<?php get_template_part( 'content', 'contact' ); ?>

				

	
			</div>			
			
			</div><!-- end section -->

			
			
			

			


		</main><!-- #main -->
	</div><!-- #primary -->



<?php //get_sidebar(); ?>
<?php get_footer(); ?>
