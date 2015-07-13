<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<?php include_once("templates/analyticstracking.php") ?>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->
  
 <!--[if IE]>
<div id="ie">
<![endif]-->

 <!--[if Webkit]>
<div id="webkit">
<![endif]-->


<div id="wrap">
  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-home-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
<div class="container" role="document">
<?php get_template_part('templates/searchform'); ?>
<?php// if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>



    <div class="row-fluid">
         <div class="main span12 <?php echo roots_main_class(); ?>" role="main">
    <?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?> 
 						
				 <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
      </div><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
   </div> <!-- /.container -->
<div id="push"></div>
</div><!-- /.wrap -->
<?php get_template_part('templates/footer'); ?>
<script type="text/javascript">

    $('.carousel').carousel({
    interval: 8000
    })
	
</script>
<!--[if Webkit]>
</div>
<![endif]-->

<!--[if IE]>
</div>
<![endif]-->

</body>
</html>