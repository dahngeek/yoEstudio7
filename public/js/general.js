$(document)
    .ready(function() {
        var $root = $('html, body');
        $('.ye7scroll').click(function(){
           var href = $.attr(this, 'href');
            $root.animate({
                scrollTop: $(href).offset().top
            }, 500, function () {
                window.location.hash = href;
            });
            return false;
        });

});