
    var snowflake = jQuery('.snow_img');
    
    jQuery.fn.toptobottom = function () {
        jQuery(this).animate({
            left: '50',
            top: '+=' + (jQuery(window).height() - 50)
        }, 5000, function () {
            jQuery(this).trigger("hasbottom");
        });
    };
    
    jQuery.fn.bottomtotop = function () {
        jQuery(this).animate({
            left: '200',
            top: '0'
        }, 5000, function () {
            jQuery(this).trigger("hastop");
        });
    };
    
    jQuery.fn.letitsnow = function () {
        if(jQuery(this).hasClass("hastop")){
            jQuery(this).toptobottom();
            jQuery(this).addClass("hasbottom");
            jQuery(this).removeClass("hastop");
            jQuery(this).letitsnow();
        }
        else{
            jQuery(this).bottomtotop();
            jQuery(this).addClass("hastop");
            jQuery(this).removeClass("hasbottom");
            jQuery(this).letitsnow();
        }
    };
    
jQuery(document).ready(function () {
    snowflake.letitsnow();
});


