jQuery(document).ready(function(){function e(){var e,i,a,t,l;e=jQuery(".filter li.active a").attr("class"),t=jQuery(".filter li a"),i=jQuery("ul.thumbnails"),a=i.clone(),t.click(function(){jQuery(".filter li").removeClass("active"),e=jQuery(this).attr("class").split(" "),jQuery(this).parent().addClass("active"),l=a.find("all"===e?"li":"li[data-type~="+e+"]"),i.quicksand(l,{duration:500,easing:"swing",adjustHeight:"auto",effect:"fadeIn",useScaling:!1})})}jQuery().quicksand&&e(),jQuery(".filter li a.web").trigger("click")});