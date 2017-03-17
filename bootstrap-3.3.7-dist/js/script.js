/**
 * Created by Pratik on 3/17/2017.
 */
jQuery(document).ready(function(){
   var navOffset = jQuery("#main").offset().top;
    jQuery(window).scroll(function () {
        var scrollPos = jQuery(window).scrollTop();
        if(scrollPos >= navOffset){
            jQuery("#main").addClass("stick");
        }else{
            jQuery("#main").removeClass("stick");
        }
    });
});