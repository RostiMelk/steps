jQuery(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
jQuery(document).ready(function($) {
    $(window).load(function(){
        setTimeout(function() {
            $('.preloader-wrapper').fadeOut();
            $('body').removeClass('preloader-site');
            window.sr = ScrollReveal();
            sr.reveal('.map-text-wrapper', {delay: '200', origin: 'bottom', distance: '200px', duration: 600});
            sr.reveal('.action-animation-wrapper', {delay: '100', duration: 600});		
            sr.reveal('.hero-heading-wrapper', {delay: '400', duration: 1000});
            sr.reveal('.hero-text-wrapper', {delay: '480', duration: 1000});
            sr.reveal('.arrow-down', {delay: '1000', duration: 1000});	
        },"1200");
    });
});