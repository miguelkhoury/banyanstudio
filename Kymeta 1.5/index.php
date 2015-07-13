<?php get_header(); ?>
<div id="content" class="site-content" role="main">
		
		
		<div class="row utility">
					<div class="col-md-12">
						
					 <div class="breadcrumbs">
                       <?php if(function_exists('bcn_display'))
                                    {
                                         bcn_display();
                                      }?>
                     </div>

                    </div>
  
			
				  				</div>

		<div class="row sub-utility">
			<h1 class="entry-title">News</h1>
			<div class="col-xs-6 nopadleft">
<h2>Posts & Press Releases</h2>
		
		<?php $my_query = new WP_Query( 'cat=-23&posts_per_page=999' );
while ( $my_query->have_posts() ) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
	<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?></div>

<div class="col-xs-6">
<h2>Kymeta In The News</h2>
		
		<?php $my_query = new WP_Query( 'category_name=in-the-news&posts_per_page=999' );
while ( $my_query->have_posts() ) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
	<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?></div>

		</div>
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		

	<?php /* Display navigation to next/previous pages when applicable <?php if ( $wp_query->max_num_pages > 1 ) : ?>
<div class="row sub-utility">
<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'bootstrap' ) ); ?></div>
<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'bootstrap' ) ); ?></div>
</div><!-- #nav-below -->
<?php endif; ?>
	*/ ?>


	
	


	</div>

<?php get_footer(); ?>
