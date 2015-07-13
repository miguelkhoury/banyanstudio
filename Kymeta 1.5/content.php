<div class="post-listing">
   <div class="row">
	  
			
		<div class="col-md-12">
			<?php the_post_thumbnail(array(200,200)); ?>
        </div>
       </div>
       
        <div class="row">
	        <div class="col-md-12">
	    <p style="font-size:80%;"><?php the_date() ?></p>
		</div>
        </div>
       
      <div class="row"> 
	      <div class="col-md-12">   
  <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>      <?php// the_excerpt(); ?>
    </div>
      </div>
    </div>