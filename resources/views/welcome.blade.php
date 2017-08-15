@extends('layouts.app')

@section('headCustom')
    <!--<link rel="stylesheet" href="/css/home.css">-->
    <!--<script src="/js/home.js"></script>-->
@stop
 
@section('content')
    
@include('layouts.bar')

<!-- Page Contents -->
<div id="pantallaBienvenida" class="pusher">
  <div class="ui grid">
    <div class="ui row centered">
      <div class="ui header">
        <h1 class="header ui">
          ¡Bienvenido!
        </h1>
      </div>
    </div>
    <div class="ui middle aligned centered stackable grid container">
        <div class="ui row">
          <p>Si esta es tu primera vez en esta semana, mirá el <b class="ye7destaca" data-element="#videoButton">Video de introducción</b>.</p>
        </div>
        <div class="ui row">
          <p>Sino, dejá de perder tiempo leyendo esto y empezá a aprender.</p>
        </div>
        <div class="ui row">
          <p>¡No te olvides de orar!</p>
        </div>
    </div>
    <div class="ui row">
        <div class="ui two column centered grid">
          <div class="one column centered row">
            <div class="center aligned column">
              <br>
                <a class="ui big green button ye7scroll" href="#dashboard">Comenzar <i class="right arrow icon"></i></a>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="imagebg animated slideInUp"></div>
  <a class="ye7scroll" id="scrollWelcome" href="#dashboard"><i class="ye7 arrow white tobotom right"></i></a>
</div>
<div id="dashboard"></div>
<div id="fixedContent" class="pusher">
  <div class="ui grid">
    <div class="ui sixteen column colorizedBg">
      <div id="weeklyVideo" style="background-image:url(/assets/imsge.jpg);">
        <div class="ui circular huge green icon button" id="playdashVideo"><i class="ui icon play"></i></div>
      </div>
    </div>
  </div>
    <div class="ui container">
        <div class="ui grid three column stackable">
            <div class="ui sixteen wide column">
              <div class="ui stacked segment">
                hola
              </div>
            </div>
            <div class="ui five wide column">
              <div class="ui stacked segment">
                <p>Hola</p>
              </div>
            </div>
            <div class="ui five wide column">
              <div class="ui stacked segment">
                hola
              </div>
            </div>
            <div class="ui five wide column"></div>
        </div>
    </div>
</div>
<div class="ui modal">
  <div class="header">Video introducción</div>
  <div class="content">
    <p></p>
    <p></p>
    <p></p>
  </div>
</div>
@stop