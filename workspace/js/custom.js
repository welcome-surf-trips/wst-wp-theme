jQuery(function(){
  /* var logoIcon = jQuery('.logo, .header3-social');
    jQuery(window).scroll(function (e) {
        var distanceTop = window.pageYOffset || document.documentElement.scrollTop;
        var beginAnimationAt = 50;
        if (distanceTop > beginAnimationAt) {
            jQuery(logoIcon).addClass('smaller', 1000);
        } else {
            jQuery(logoIcon).removeClass('smaller');
        }
    });*/
   
     jQuery(window).scroll(function (e) {  
     var logoIcon = jQuery('.logo, .header3-social');       
        var pscroll = jQuery(window).scrollTop();
        var contTop = jQuery(".logo").height();

        if (pscroll > contTop) {
            jQuery("#menu_wrap").addClass('fixar');
            jQuery(logoIcon).addClass('smaller', 1000);
            
        } else {
            jQuery("#menu_wrap").removeClass('fixar');
            jQuery(logoIcon).removeClass('smaller');
        }
    });
       jQuery('.outer-center').on('click',function(){
        window.location.href = 'http://betablog.welcomesurftrips.com.br/';
     });
    
})
