$(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('#barButton').fadeIn();
            $('#barra-encabezado').toggleClass("celeste");
          },
          onBottomPassedReverse: function() {
            $('#barButton').fadeOut();
            $('#barra-encabezado').toggleClass("celeste");
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;