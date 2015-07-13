<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right');
  // Add the blog description for the home/front page.
	$site_description = get_option( 'blogdescription', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
 ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  
  <script type="text/javascript">
	
	
		var i = 0;
		var imageAmount = 72;
		var autospin = false;
		var tickAmount = 10;
		var imgholder = 0;
		var speeeeeed = 25;
		var mdown = false;
		
		function loadDemo(){
			
			$("autoplaybutton").checked = false;
			$("speed").value = "5";
			$("ticks").value  = "10";
			$("notice").setStyle("opacity", "0");
			setTimeout("$('notice').fade([0,1]);", 1000);
			setTimeout("$('notice').fade(0);", 5000);
			setTimeout("$('notice').innerHTML = 'Click and drag the image to rotate.';", 5900);
			setTimeout("$('notice').fade(1);", 6500);
			
	  		imgholder = $("imgholder");
			
			
			$("control").addEvents({
            			'mousedown': function(e){
            				 e.preventDefault(); // firefox/ie crazyness
            				 autospin = false;
            				 mdown = true;
							 posXori = e.page.x;
							 
						},
						'mouseup': function(e){
								if(mdown){
							 		mdown = false;
								}
							},
						'mouseleave': function(e){
							 
							 	mdown = false;
							    
					 
							},
						'mousemove': function(e){
							if(mdown){
							 	var moveto = parseInt((e.page.x - posXori)/tickAmount);
							 	if(moveto >= 1){
							 		posXori = e.page.x;
							 		
							 		moveBack();
							 	}
							 	if(moveto <= -1){
							 	 	posXori = e.page.x;
							 		moveForward();
							 	}
						 
							}
							 
						}
					});
 
		}
 
 	function moveForward(){
 		i++;
 		if(i == imageAmount){
 			i=0;
 		}
 		imgholder.setStyle("background-position", "0px "+(-i*376)+"px");
 	}
 	
 	 function moveBack(){
 		i--;
 		if(i == -1){
 			i = imageAmount-1;
 		}
 		 
 		imgholder.setStyle("background-position", "0px "+(-i*376)+"px");
 	}
 	
 	
 	function nextImage(){
 	 
 		i++;
 		if(i == imageAmount){
 			i=0;
 		}
 		
 		imgholder.setStyle("background-position", "0px "+(-i*376)+"px");
 		if(autospin){
 			setTimeout("nextImage();", speeeeeed);
 		}
 	}
  
 	function toggelPlay(){
 		if(!autospin){
 			autospin = true;
 			nextImage();
 			 
 		}
 		else{
 			autospin = false;
 		}
 	}
 	
 	function setSpeed(val){
 		if(val <= 0 || val >= 11){
 			alert("your val is pish man!");
 		}
 		else{
 			speeeeeed = 51 - (val*5);
 		}
 	}
 	
 	
 	function setTick(val){
 		if(val <= 0 || val >= 101){
 			alert("your val is pish man!");
 		}
 		else{
 			tickAmount = val;
 		}
 	}
 	
 	
	</script>

</head>

