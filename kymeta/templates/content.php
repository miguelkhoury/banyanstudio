<div class="item">
   <?php the_post_thumbnail(array(200,100)); ?>
   </br>
<p style="font-size:80%;"><?php the_time('m/j/y') ?></p>
  <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>      <?php// the_excerpt(); ?>
    </div>
