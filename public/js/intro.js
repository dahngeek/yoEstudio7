var player, iframe,video_id;
var $$ = document.querySelector.bind(document);
$(document)
    .ready(function() {
    video_id = $('#video_id').data('ytid');
    //Generamos el thumbnail
    $('.embed-container').css({
      'background' : "url('http://img.youtube.com/vi/"+video_id+"/maxresdefault.jpg') center center",
      'background-size' : 'contain'
    });

    //Ocultamos el reproductor
    if(typeof window.orientation == 'undefined'){
        $('#player').hide();
    };

    $('.play_video').click(function(){
      // mostramos reproducimis a pantalla completa
      $('.video_overlay_controls').hide();
      $('#player').show();
      playFullscreen();
    });

    $('.play_muted').click(function(){
      $('.video_overlay_controls').hide();
      $('.play_muted').hide();
      $('#player').show();
      player.mute();
      playFullscreen();
    });
});

// init player
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    videoId: video_id,
    playerVars: { 'showinfo': 0, 'rel': 0, 'modestbranding':1, 'rel':0},
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

// when ready, wait for clicks
function onPlayerReady(event) {
  var player = event.target;
  iframe = $$('#player');
  $('.video_overlay_controls').show();
  // setupListener(); 
}

// function setupListener (){
// $('button').addEventListener('click', playFullscreen);
// }

function playFullscreen (){
  player.playVideo();//won't work on mobile
  
  var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
  if (requestFullScreen) {
    requestFullScreen.bind(iframe)();
  }
}

// when video ends
function onPlayerStateChange(event) {  
    if(event.data === 0) {
        var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
        (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
        (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
        (document.msFullscreenElement && document.msFullscreenElement !== null);
        if(isInFullScreen){
           if (document.exitFullscreen) {
              document.exitFullscreen();
          } else if (document.webkitExitFullscreen) {
              document.webkitExitFullscreen();
          } else if (document.mozCancelFullScreen) {
              document.mozCancelFullScreen();
          } else if (document.msExitFullscreen) {
              document.msExitFullscreen();
          }
        }
        window.location.replace("./hoy");
    }
}