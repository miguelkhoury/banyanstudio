  <div class="row-fluid">
         <div class="main span12 <?php echo roots_main_class(); ?>" role="main">
    <?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
 						
				<?php endwhile; ?>
      </div><!-- /.main -->
        </div><!-- /.content -->
    <div class="row-fluid">
      <div class="span3" >
           <?php
  $args=array(
  'orderby' =>'parent',
  'order' =>'asc',
  'post_type' =>array('page','post'),
  'ignore_sticky_posts' => 1,
  'meta_key' =>  'feature-box',
  'meta_value' =>  '4',
   );
   $page_query = new WP_Query($args); ?>
  
 <?php while ($page_query->have_posts()) : $page_query->the_post(); ?>
  
  <div class="section">  <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('full'); ?></a>

    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
   <?php the_excerpt(); ?>
     <p><a href="<?php the_permalink();?>" class="bigbutton">Learn more »</a></p>
    
  </div>
  <?php endwhile; ?>
  
        </div>

        <div class="span3" >
           <?php
  $args=array(
  'orderby' =>'parent',
  'order' =>'asc',
  'post_type' =>array('page','post'),
  'ignore_sticky_posts' => 1,
  'meta_key' =>  'feature-box',
  'meta_value' =>  '1',
   );
   $page_query = new WP_Query($args); ?>
  
 <?php while ($page_query->have_posts()) : $page_query->the_post(); ?>
 
  <div class="section">  <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('full'); ?></a>

     <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
   <?php the_excerpt(); ?>
     <p><a href="<?php the_permalink();?>" class="bigbutton">Learn more »</a></p>
    
  </div>
  <?php endwhile; ?>
  
        </div>
       <div class="span3" >
           <?php
  $args=array(
  'orderby' =>'parent',
  'order' =>'asc',
  'post_type' =>array('page','post'),
  'ignore_sticky_posts' => 1,
  'meta_key' =>  'feature-box',
  'meta_value' =>  '2',
   );
   $page_query = new WP_Query($args); ?>
  
 <?php while ($page_query->have_posts()) : $page_query->the_post(); ?>
   
  <div class="section">  <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('full'); ?></a>
 <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
  
   <?php the_excerpt(); ?>
     <p><a href="<?php the_permalink();?>" class="bigbutton">Learn more »</a></p>
    
  </div>
  <?php endwhile; ?>
  
        </div>
       <div class="span3" >
           <?php
  $args=array(
  'orderby' =>'parent',
  'order' =>'asc',
  'post_type' =>array('page','post'),
  'ignore_sticky_posts' => 1,
  'meta_key' =>  'feature-box',
  'meta_value' =>  '3',
   );
   $page_query = new WP_Query($args); ?>
  
 <?php while ($page_query->have_posts()) : $page_query->the_post(); ?>
   
  <div class="section">  <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('full'); ?></a>
 <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
  
   <?php the_excerpt(); ?>
     <p><a href="<?php the_permalink();?>" class="bigbutton">Learn more »</a></p>
    
  </div>
  <?php endwhile; ?>
  
        </div>
        
      </div>
  </div> <!-- /.container -->