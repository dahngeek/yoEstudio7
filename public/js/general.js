var bannerVisible = false;
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

        // dashboard en welcome
        $('#pantallaBienvenida').visibility({
            onUpdate: function(calculations){
                console.log(calculations);
                if(!calculations.offScreen&& calculations.percentagePassed<1){
                    console.log("se fixea");
                    bannerVisible=false;
                    $('#pantallaBienvenida').css({'margin-bottom':$("#fixedContent").height()});
                    $('#fixedContent').css({'position':'fixed'});
                    $("#scrollWelcome").show();
                }
                else if(calculations.offScreen){
                    console.log("se statiquea");
                    bannerVisible=true;
                    $('#pantallaBienvenida').css({'margin-bottom':'auto'});
                    $('#fixedContent').css({'position':'static'});
                    $("#scrollWelcome").hide();
                }
            }
        });
        $("#playdashVideo").click(function(){
            $('.ui.modal')
                .modal({
                    blurring: true
                })
                .modal('show')
                ;
        });
        console.log("pizza");

});