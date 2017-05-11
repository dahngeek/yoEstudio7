@extends('layouts.app')

@section('headCustom')
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="/js/intro.js"></script>
@stop
 
@section('content')
    
@include('layouts.bar')

<!-- Page Contents -->
<div id="contenido" class="pusher">
    <div class="ui container">
        <div class="ui grid three column stackable">
            <div class="ui one wide column"></div>
            <div class="ui fourteen wide column">

                <div class='embed-container'>
                    <div id="player"></div>
                    <div id="overlay-controls" style="display: none;" class="video_overlay_controls ui middle aligned centered grid mobile hidden">
                        <div class="ui two column centered grid">
                            <div class="four column centered row">
                                <div class="column right aligned">
                                    <button class="play_video  ui circular huge green icon button">
                                        <i class="play icon"></i>
                                    </button>
                                </div>
                                <div class="column">
                                    <button class="play_muted  ui circular huge inverted grey icon button">
                                        <i class="mute icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile only">
                    <div class="video_overlay_controls mobile only centered ui row stackable relaxed">
                        <br>
                        <div class="ui row centered">
                            <div class="play_video ui button green fluid huge play"><i id="mobile_control" class="play icon"></i> <span>Play</span></div>
                        </div>
                        <br>
                        <div class="ui row centered">
                            <div class="play_muted ui button black fluid huge play"><i id="mobile_control" class="play icon"></i> <span>Play Muted</span></div>
                        </div>
                    </div>
                    <div class="mobile only centered ui row stackable relaxed">
                        <br>
                        <div class="ui row centered">
                            <a href="/estudiar/hoy" class="ui button blue fluid huge">Continuar <i class="right arrow icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ui two column centered grid mobile hidden">
                    <div class="four column row">
                        <div class="column right floated">
                            <a href="/estudiar/hoy" class="ui blue bottom attached button right floated">Continuar <i class="ui right arrow icon"></i></a>
                        </div>
                    </div>
                </div>
            
                <div id="video_id" data-ytid="uFmWUJukVjE"></div>
            </div>
            <div class="ui one wide column"></div>
        </div>
    </div>
</div>

@stop