$(document)
    .ready(function() {
        var $root = $('html, body');
        $('.ye7scroll').click(function(){
           var href = $.attr(this, 'href');
            $root.animate({
                scrollTop: $(href).offset().top
            }, 500, function () {
                // window.location.hash = href;
            });
            return false;
        });
        $('.ye7destaca').hover(function(){
            console.log("hover");
            var elemento = $(this).data('element')
            console.log($(elemento));
            $(elemento).css({'animation':'rubberBand 1s'});
        },function(){
            console.log("hover out");
            var elemento = $(this).data('element')
            console.log($(elemento));
            $(elemento).css({'animation':''});
        });

        console.log($('.ui.embed').embed());

});