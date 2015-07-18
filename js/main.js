/*-----------------------------------------------------------------------------------

 	Custom JS - All front-end jQuery
 
-----------------------------------------------------------------------------------*/
 
jQuery(document).ready(function() {
	
	function portfolio_quicksand() {
		
		// Setting Up Our Variables
		var jQueryfilter;
		var jQuerycontainer;
		var jQuerycontainerClone;
		var jQueryfilterLink;
		var jQueryfilteredItems;
		
		// Set Our Filter
		jQueryfilter = jQuery('.filter li.active a').attr('class');
		
		// Set Our Filter Link
		jQueryfilterLink = jQuery('.filter li a');
		
		// Set Our Container
		jQuerycontainer = jQuery('ul.thumbnails');
		
		// Clone Our Container
		jQuerycontainerClone = jQuerycontainer.clone();
		
		// Apply our Quicksand to work on a click function
		// for each for the filter li link elements
		jQueryfilterLink.click(function() 
		{
			// Remove the active class
			jQuery('.filter li').removeClass('active');
			
			// Split each of the filter elements and override our filter
			jQueryfilter = jQuery(this).attr('class').split(' ');
			
			// Apply the 'active' class to the clicked link
			jQuery(this).parent().addClass('active');
			
			// If 'all' is selected, display all elements
			// else output all items referenced to the data-type
			if (jQueryfilter === 'all') {
				jQueryfilteredItems = jQuerycontainerClone.find('li'); 
			}
			else {
				jQueryfilteredItems = jQuerycontainerClone.find('li[data-type~=' + jQueryfilter + ']'); 
			}
			
			// Finally call the Quicksand function
			jQuerycontainer.quicksand(jQueryfilteredItems, 
			{
				// The Duration for animation
				duration: 500,
				// the easing effect when animation
				easing: 'swing',
				// height adjustment becomes dynamic
				adjustHeight: 'auto',
				
				effect: 'fadeIn',
				
				useScaling: false
			});
			
	
		});
	}
		
	if(jQuery().quicksand) {
		portfolio_quicksand();	
	}
		

	jQuery('.filter li a.web').trigger('click');}
); // END OF DOCUMENT