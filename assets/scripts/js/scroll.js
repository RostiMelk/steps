jQuery(document).ready(function( $ ) {
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 750);
    });
});
history.scrollRestoration = "manual"
