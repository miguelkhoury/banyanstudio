<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

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
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
<div class="container" role="document">
<?php get_template_part('templates/searchform'); ?>
<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>



    <div class="content row">
         <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
         </div><!-- /.content -->
  </div><!-- /.container -->
<div id="push"></div>
</div><!-- /.wrap -->
<?php get_template_part('templates/footer'); ?>
<!-- activate tabs with JavaScript -->
<script type="text/javascript">
 //Initialising Accordion
$("#accordion").tabs(".pane", {tabs: '> h2', effect: 'slide', initialIndex: null});
 
	//The click to hide function
	$("#accordion > h2").click(function(){
	 if($(this).hasClass("current") && $(this).next().queue().length == 0){
	  $(this).next().slideUp();
	  $(this).removeClass("current");
	 }else if(!$(this).hasClass("current") && $(this).next().queue().length == 0){
  $(this).next().slideDown();
	  $(this).addClass("current");
	 }
	});
</script>

<!-- Masonry settings -->
<script type="text/javascript">

var $container = $('.container');
$container.imagesLoaded(function(){
  $('.page-id-4624 .row-fluid').masonry({
    // options
    itemSelector : '.page-id-4624 .span6',
    columnWidth : function( containerWidth ) {
    return containerWidth / 2;
  }
    
      });
});
</script>


<!-- Carousel settings -->
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