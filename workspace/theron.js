/* <![CDATA[ */
//THERON JavaScript 

jQuery(window).load(function($) {

jQuery('.logo:has(img)').css({"paddingBottom":"0px"});
jQuery("#newslider").filter(function() { return this.childNodes.length === 1; }).hide();

jQuery('.comments_template .navigation a, .comments_template .navigation span').wrapAll('<div class="compagin" />');


//IE FIX
//IE SELECTORS
jQuery('.lay1 .hentry:eq(3), .lay1 .hentry:eq(7), .lay1 .hentry:eq(11), .lay1 .hentry:eq(15), .lay1 .hentry:eq(19), .lay1 .hentry:eq(23), .lay2 .hentry:eq(2), .lay2 .hentry:eq(5), .lay2 .hentry:eq(8), .lay2 .hentry:eq(11), .lay2 .hentry:eq(14), .lay2 .hentry:eq(17), .lay3 .hentry:eq(2), .lay3 .hentry:eq(5), .lay3 .hentry:eq(8), .lay3 .hentry:eq(11), .lay3 .hentry:eq(14), .lay3 .hentry:eq(17), .ads-125x125 a:eq(1) img, .ads-125x125 a:eq(3) img').css({'margin-Right':'0px'});


//Social icons Animation

//FRONTPAGE SOCIAL ANIMATION
jQuery('.social_wrap ul li a').hoverIntent(function(){
jQuery(this).animate({'background-position-y': '-36px'}, 100, 'linear');
}, function(){
jQuery(this).animate({'background-position-y': '0%'}, 100, 'linear');
	});
	
	
	//MENU Animation
	if (jQuery(window).width() > 480) {
	jQuery('#topmenu ul > li').hoverIntent(function(){
	jQuery(this).find('.sub-menu:first, ul.children:first').slideDown({ duration: 200});
	}, function(){
	jQuery(this).find('.sub-menu:first, ul.children:first').slideUp({ duration: 200});	
	});
	jQuery('#topmenu ul li').not('#topmenu ul li ul li').hover(function(){
	jQuery(this).addClass('menu_hover');
	}, function(){
	jQuery(this).removeClass('menu_hover');	
	});
	jQuery('#topmenu li').has("ul").addClass('zn_parent_menu');
	jQuery('.zn_parent_menu > a').append("<span></span>");

	//Midrow Blocks Equal Width
	if(jQuery('.midrow_block').length == 4){ jQuery('.midrow_blocks').addClass('fourblocks'); }
	if(jQuery('.midrow_block').length == 3){ jQuery('.midrow_blocks').addClass('threeblocks'); }
	if(jQuery('.midrow_block').length == 2){ jQuery('.midrow_blocks').addClass('twoblocks'); }
	if(jQuery('.midrow_block').length == 1){ jQuery('.midrow_blocks').addClass('oneblock'); }
	jQuery('.midrow_block').equalHeights();
	} 

	//Show the links button in Midrow blocks for touch active devices
	if(jQuery.support.touch){
		jQuery('.blocklink').css({"width" : "32px", "height" : "32px"});	 
	}


//Layout 2 Animation
	if (jQuery(window).width() > 500) {
 	jQuery('.lay2 .hentry').hoverIntent(function() {
    jQuery('.lay2 .hentry').not(this).animate({ "opacity":" .5","z-index":"-2"},200);
		jQuery(this).find('.post_content').animate({ "top":"0px"}, 200);
		}, function(){
	jQuery('.lay2 .hentry').not(this).animate({"opacity": " 1","z-index":"1"},200);
		jQuery(this).find('.post_content').animate({ "top":"154px"}, 200);
	});
	}
	
	if (jQuery(window).width() < 800) {
 	jQuery('.lay2 .hentry').hoverIntent(function() {
    jQuery('.lay2 .hentry').not(this).animate({ "opacity":" .5","z-index":"-2"},200);
		jQuery(this).find('.post_content').animate({ "top":"0px"}, 200);
		}, function(){
	jQuery('.lay2 .hentry').not(this).animate({"opacity": " 1","z-index":"1"},200);
		jQuery(this).find('.post_content').animate({ "top":"100px"}, 200);
	});
	}

//Layout 1 Date Animation
	jQuery('.lay1 .date_meta').css({"left":"-80px"});
 	jQuery('.lay1 .hentry').hoverIntent(function(){
	jQuery(this).find('.date_meta').animate({ "left":"0px"}, 200);
	}, function(){
	jQuery(this).find('.date_meta').animate({"left":"-80px"}, 100);	
	});


//Layout3 Animation

	jQuery('.lay3 .hentry ').hover(function(){
		jQuery(this).find('.date_meta').stop().animate({'right':'0px'}, 300);
		jQuery(this).find('.block_comm').stop().animate({'left':'0px'}, 300);
	}, function(){
		jQuery(this).find('.date_meta').stop().animate({'right':'-200px'}, 300);
		jQuery(this).find('.block_comm').stop().animate({'left':'-200px'}, 300);
	});

	//Comment Form
jQuery('.comment-form-author, .comment-form-email, .comment-form-url').wrapAll('<div class="field_wrap" />');

	
});

//Shortcode JS
jQuery(window).load(function($) {

	jQuery(".lgn_tab p:empty").remove();
	jQuery('.tabli a:eq(0)').attr('href', '#tab-1');
	jQuery('.tabli a:eq(1)').attr('href', '#tab-2');
	jQuery('.tabli a:eq(2)').attr('href', '#tab-3');
	jQuery('.tabli a:eq(3)').attr('href', '#tab-4');	
	jQuery('.tabli a:eq(4)').attr('href', '#tab-5');
	jQuery('.tabli a:eq(5)').attr('href', '#tab-6');
	jQuery('.tabli a:eq(6)').attr('href', '#tab-7');
	jQuery('.tabli a:eq(7)').attr('href', '#tab-8');
	jQuery('.tabli a:eq(8)').attr('href', '#tab-9');
	
	
	jQuery('.lgn_tab div:eq(0)').attr('id', 'tab-1');
	jQuery('.lgn_tab div:eq(1)').attr('id', 'tab-2');
	jQuery('.lgn_tab div:eq(2)').attr('id', 'tab-3');
	jQuery('.lgn_tab div:eq(3)').attr('id', 'tab-4');	
	jQuery('.lgn_tab div:eq(4)').attr('id', 'tab-5');
	jQuery('.lgn_tab div:eq(5)').attr('id', 'tab-6');
	jQuery('.lgn_tab div:eq(6)').attr('id', 'tab-7');
	jQuery('.lgn_tab div:eq(7)').attr('id', 'tab-8');
	jQuery('.lgn_tab div:eq(8)').attr('id', 'tab-9');
				
	jQuery(document).ready(function(){
	jQuery('.tabs-container .lgn_tab div').hide();
	jQuery('.tabs-container .lgn_tab div:first').show();
	jQuery('.tabs li:first').addClass('active');
	jQuery('.tabs li a').click(function(){ 
	jQuery('.tabs li').removeClass('active');
	jQuery(this).parent().addClass('active'); 
	var currentTab = jQuery(this).attr('href'); 
	jQuery('.tabs-container .lgn_tab div').hide();
	jQuery(currentTab).fadeIn();
	return false;
	});
	});
	//Toggle Shortcode
	jQuery('.lgn_toggle_content').hide(); // Hide even though it's already hidden
	jQuery('.trigger').click(function() {
    jQuery(this).closest('.lgn_toggle').find('.lgn_toggle_content').slideToggle("fast"); // First click should toggle to 'show'
	  return false;
   });
   	jQuery('.lgn_toggle a').toggle(function(){
	jQuery(this).addClass('down');
	}, function(){
	jQuery(this).removeClass('down');	
	});
	
//copyright text width	
jQuery("#copyright").find('#footmenu:empty').parent().addClass('no_fmenu');

//form submit button animation
jQuery(".form-submit input, #searchsubmit").click(function(){
  jQuery(this).animate({"marginTop" : "3px"}, 20);
    jQuery(this).animate({"marginTop" : "0px"}, 20);
});

});	
/* ]]> */