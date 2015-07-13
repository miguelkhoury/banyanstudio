<?php get_header(); ?>
<div id="content" class="site-content" role="main">
	

<div class="hentry">
	<div class="row">
	
					<div class="col-md-12">
						
					 <div class="breadcrumbs">
                       <?php if(function_exists('bcn_display'))
                                    {
                                         bcn_display();
                                      }?>
                     </div>

                    </div>
  
			
				   
					
					
					  <?php //include (TEMPLATEPATH . '/searchform.php'); ?>
					
				  
				</div>
</div>

	
<div class="hentry">
	<div class="row">
        <div class="col-md-12">
            <?php if (have_posts()) : // Results Found ?>

                <h1 class="searchtitle"><?php _e('Search Results'); ?></h1>

                <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>
	                
	                
                    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    
                    
                    
                    
                    
                    
                    <div class="entry">
                        <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                    </div>
                </article>
             

                <?php endwhile; ?>

                <ul class="pager">
                    <li><?php next_posts_link('<i class="icon-chevron-left"></i>&nbsp; Older Results') ?></li>
                    <li><?php previous_posts_link('Newer Results &nbsp;<i class="icon-chevron-right"></i>') ?></li>
                </ul>

            <?php else : // No Results ?>
            
          
	            
             
                <div class="row sub-utility">
	                   <p><?php _e('We’re sorry. There were no matches for your search'); ?></p>
	                   <p> <a href="/search/">« back to Search Form </a></p>
                                    </div> <!-- .row -->

            <?php endif; ?>

        </div> <!-- .col-md-8 -->
	</div>

        <?php //get_sidebar(); ?>

    </div> <!-- .row -->

</div><!-- .container -->
<?php get_footer(); ?>
