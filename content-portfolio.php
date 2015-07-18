<?php
/**
 * The template used for displaying portfolio content in the front page.php
 *
 * @package _s
 */
?>
<div id="wploop" class="container-fluid ">
<h1>Portfolio</h1>
			
				<div class="row">
		<ul class=" filter nav nav-pills">
				
					<li class="active"><a href="javascript:void(0)" class="web"> Web</a></li>
					<li class="active"><a href="javascript:void(0)" class="branding">Branding</a></li>
                    <li class="active"><a href="javascript:void(0)" class="print">Print</a></li>
                     <li class="active"><a href="javascript:void(0)" class="misc">Misc</a></li>
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
                    <li><a href="javascript:void(0)" class="all">All</a></li>
				</ul>
				</div>
				
			<div class="row shortwidth center-block">
				<ul class="thumbnails filterable-grid " >
			
					<?php 
						// Set the page to be pagination
						//$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						
						// Query Out Database
						$wpbp = new WP_Query(
						
						
						
						array( 
						
						'post_type' => 'portfolio', 
						'posts_per_page' =>'999', 
						//'order' => 'ASC',
						'orderby' => 'date'
						
						
						
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
							<li data-id="id-<?php echo $count; ?>" data-type="<?php foreach ($terms as $term) { echo strtolower(preg_replace('/\s+/', '-', $term->name)). ' '; } ?>" >
								
									<?php 
										// Check if wordpress supports featured images, and if so output the thumbnail
										if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : 
									?>
										
										<?php // Output the Modal and its contents ?>
<a href="#myModal-<?php the_ID(); ?>" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?>">
    <?php the_post_thumbnail('thumbnail'); ?></a>	
    
     <div id="myModal-<?php the_ID(); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <h3 id="myModalLabel">
         
        </h3>
             </div>
      <div class="modal-body">
	      
     
       
      




	       <button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true"><img src="/wp-content/themes/_strap-master/images/arrows_circle_remove.svg" width="30px" height="30px" ></button>
	       <?php the_title('<h1>', '</h1>');?>
	       
	    
          <?php the_content();?>
     

           
            </div><! modal footer>
 </div>

    
   
    
<?php endif; ?>	
									
</li>
							

	
					
					<?php $count++; // Increase the count by 1 ?>		
					<?php endwhile; endif; // END the Wordpress Loop ?>
					<?php wp_reset_query(); // Reset the Query Loop?>
			
				</ul>
				
				
			</div>
</div>
			
		
					
