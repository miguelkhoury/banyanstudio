<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php //get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
	    POSTED: <?php the_time('m/j/y g:i A') ?><br />
FILED AS: <?php the_category(', ') ?><br />
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'kymeta'), 'after' => '</p></nav>')); ?>
      <?php //the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

