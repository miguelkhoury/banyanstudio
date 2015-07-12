<?php
/**
 * Template Name: Portfolio Index
 *
  */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="main" class="site-main container" role="main">
			<div id="content">
			<div class="row shortwidth center-block">
		<ul class=" filter nav nav-pills">
			
				
					<li class="active"><a href="javascript:void(0)" class="web"><span class="icon icon-basic-webpage-multiple" aria-hidden="true"></span> Web</a></li>
					<li class="active"><a href="javascript:void(0)" class="branding"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span> Branding</a></li>
                    <li class="active"><a href="javascript:void(0)" class="print"><span class="icon icon-basic-spread-text" aria-hidden="true"></span> Print</a></li>
                     <li class="active"><a href="javascript:void(0)" class="misc"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Misc</a></li>
					<?php
						// Get the taxonomy
						$terms = get_terms('filter', $args);
						
						// set a count to the amount of categories in our taxonomy
						$count = count($terms); 
						
						// set a count value to 0
						$i=0;
						
						// test if the count has any categories
						if ($count > 0) {
							
							// break each of the categories into individual elements
							foreach ($terms as $term) {
								
								// increase the count by 1
								$i++;
								
								// rewrite the output for each category
								//$term_list .= '<li><a href="javascript:void(0)" class="'. $term->slug .'">' . $term->name . '</a></li>';
								
								// if count is equal to i then output blank
								if ($count != $i)
								{
									$term_list .= '';
								}
								else 
								{
									$term_list .= '';
								}
							}
							
							// print out each of the categories in our new format
							echo $term_list;
						}
					?>
                    <li><a href="javascript:void(0)" class="all"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> All</a></li>
				</ul>
				</div>
				
			<div class="row">
				<ul class="filterable-grid thumbnails">
			
					<?php 
						// Set the page to be pagination
						//$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						
						// Query Out Database
						$wpbp = new WP_Query(
						
						
						
						array( 
						
						'post_type' => 'portfolio', 
						'posts_per_page' =>'999', 
						'order' => 'ASC',
						'orderby' => 'title',
						
						//'paged' => $paged 
						
						) 
						
						
						
						
						
						
						
						); 
					?>
					
					<?php
						// Begin The Loop
						if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); 
					?>
					
					<?php 
						// Get The Taxonomy 'Filter' Categories
						$terms = get_the_terms( get_the_ID(), 'filter' ); 
					?>
					
					<?php 
					$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
					$large_image = $large_image[0]; 
					?>
					
							<?php
								//Apply a data-id for unique indentity, 
								//and loop through the taxonomy and assign the terms to the portfolio item to a data-type,
								// which will be referenced when writing our Quicksand Script
							?>
							<li data-id="id-<?php echo $count; ?>" data-type="<?php foreach ($terms as $term) { echo strtolower(preg_replace('/\s+/', '-', $term->name)). ' '; } ?>" class="col-xs-6 col-md-2">
								
									<?php 
										// Check if wordpress supports featured images, and if so output the thumbnail
										if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : 
									?>
										
										<?php // Output the featured image in a Bootstrap-based modal ?>
										<a href="#" class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></a>									
																			
									<?php endif; ?>	
									
									<?php // Output the title of each portfolio item ?>
									
                                    <!-- <p><a href="  the_permalink(); ">< echo get_the_title(); </a></p> -->
									
							</li>
	
					
					<?php $count++; // Increase the count by 1 ?>		
					<?php endwhile; endif; // END the Wordpress Loop ?>
					<?php wp_reset_query(); // Reset the Query Loop?>
			
				</ul>
				
				
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
					
	</div><!-- #content END -->

		</div><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>