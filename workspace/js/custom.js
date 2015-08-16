jQuery(function(){
   var logoIcon = jQuery('.logo, .header3-social');
    jQuery(window).scroll(function (e) {
        var distanceTop = window.pageYOffset || document.documentElement.scrollTop;
        var beginAnimationAt = 50;

        if (distanceTop > beginAnimationAt) {
            jQuery(logoIcon).addClass('smaller', 1000);
        } else {
            jQuery(logoIcon).removeClass('smaller');
        }
    });
})
