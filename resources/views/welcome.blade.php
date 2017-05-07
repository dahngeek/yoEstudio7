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
          <div class="four column centered row">
            <div class="column">
                <div class="ui saltar pequenia right floated image" id="videoButton">
                  <a href="/estudiar/intro">
                    <img src="/assets/images/icons/play.png">
                    <p>Ver Intro</p>
                  </a>
                </div>
            </div>
            <div class="column">
                <div class="ui saltar pequenia image">
                  <a href="/estudiar/hoy">
                    <img src="/assets/images/icons/lapiz.png">
                    <p>Comenzar</p>
                  </a>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="imagebg animated slideInUp"></div>
</div>

@stop