?><div id="scrollbox">
<div class="scrollable">
<div class="navi"></div>
<div class="items"><? 
                        
    $my_query = new WP_Query(array('posts_per_page' => 6,'tag' => 'featured' ) );      
      while ($my_query->have_posts()) : $my_query->the_post();         

?><div>
<a href="<?          the_permalink();     ?>" title="<?        the_title_attribute();       ?>" ><?          


if (is_mobile()) {
   the_post_thumbnail('medium');
   } else {
   the_post_thumbnail('large');
}



?></a>
<span class="titleblock">
<h3><a href="<?        the_permalink();         ?>"><?         the_title();         ?></a></h3></span></div><?
                          
    endwhile;     
                         
?></div></div><a class="next browse right"></a></div><?





