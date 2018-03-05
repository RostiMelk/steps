jQuery(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
jQuery(document).ready(function($) {
    $(window).load(function(){
        setTimeout(function() {
            $('.preloader-wrapper').fadeOut();
            $('body').removeClass('preloader-site');
        },"1200");
    });
});