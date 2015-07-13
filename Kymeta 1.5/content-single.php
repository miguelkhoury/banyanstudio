<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		
					<div class="row">
					<div class="col-md-12">
						
					 <div class="breadcrumbs">
                       <?php if(function_exists('bcn_display'))
                                    {
                                         bcn_display();
                                      }?>
                     </div>

                    </div>
  
			</div>
			
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php $single_metadata = flat_get_theme_option( 'single_metadata' ); ?>
		<?php if ( empty( $single_metadata ) ) : ?>
			 <div class="entry-meta">Published: <?php the_date() ?></div>
		<?php endif; ?>
	</header>
	
	<div class="entry-content">
		<?php the_content( __( 'Continue reading', 'flat' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>
	<?php the_tags( '<div class="tags-links">', __( ' ', 'flat' ), '</div>' ); ?>
	
</article>
	<?php $single_author_box = flat_get_theme_option( 'single_author_box' ); ?>
	<?php if ( get_the_author_meta( 'description' ) && empty( $single_author_box ) ) : ?>
		<?php get_template_part( 'author-bio' ); ?>
	<?php endif; ?>
