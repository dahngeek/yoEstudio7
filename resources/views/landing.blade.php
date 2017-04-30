@extends('layouts.app')

@section('headCustom')
    <link rel="stylesheet" href="/css/home.css">
    <script src="/js/home.js"></script>
@stop
 
@section('content')
    
<!-- Following Menu -->
<div id="barra-encabezado" class="ui large top fixed menu">
  <div class="ui container">
    <div class="header item">
        <!--<img src="/assets/images/logo-black.png" class="ui logobar" alt="YoEstudio7 logo">-->
        <a href=""><h1 class="logo-header">YoEstudio7</h1></a>
    </div>
    <!--<a class="active item">Inicio</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>-->
    <div class="right menu">
      <!--<div class="item">
        <img class="ui avatar image" src="http://placehold.it/50x50">
        <span>Daniel Xutuc</span>
      </div>-->
      <div class="item">
        <i class="facebook large icon"></i>
        <i class="twitter large icon"></i>
        <i class="instagram large icon"></i>
      </div>
      <div id="barButton" class="item" style="display:none;">
        <a class="ui green button" href="/estudiar">Probar</a>
      </div>
    </div>
  </div>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div id="cabecerahome" class="ui inverted vertical masthead center aligned segment">


    <div class="ui text container">
      <div class="ui relaxed grid">
        <div class="sixteen wide column">
          <img src="/assets/images/logo.png" class="ui image mobile only grid centered" alt="YoEstudio7 logo">
          <h1 class="ui header">
            <div class="ui medium header">Tu estudio diario.</div>
          </h1>
        </div>
        <!--<div class="row centered">
          <div class="ui huge buttons">
          <a class="ui huge positive button">Pruébalo <i class="right mouse pointer icon"></i></a>
          <div class="or">o</div>
          <a class="ui huge button">Crea tu perfil <i class="right facebook square icon"></i> </a>
        </div>
        </div>-->
        <div class="ui centered grid row">
          <div class="row aligned">
            <a class="ui huge facebook button" href="/estudiar">Crea tu perfil <i class="right facebook square icon"></i> </a>
          </div>
          <div class="row aligned">
            <a class="ui huge green button" href="/estudiar">Pruébalo <i class="right arrow icon"></i> </a>
          </div>
        </div>
      </div>
    </div>
    <a class="ye7scroll" href="#porque"><i class="ye7 arrow white tobotom centered"></i></a>
  </div>

  <div id="porque" class="ui vertical stripe">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h1 class="ui header">
            <div class="ui medium header">
              <!--<i class="compass icon"></i>-->
              Explora
            </div>
          </h1>
          <p >La biblia de una manera práctica y diferente. echa un vistazo todos los días, siempre hay algo nuevo que aprender.</p>
        </div>
        <div class="six wide left floated column">
          <img src="assets/images/firm.jpg" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="eight wide column">
          <h1 class="ui header">
            <div class="ui medium header">
              <!--<i class="marker icon"></i> -->
              Descubre
            </div>
          </h1>
          <p>Lo que la biblia quiere decirnos en cada parte.</p>
        </div>
        <div class="six wide left floated column">
          <img src="assets/images/firm.jpg" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="eight wide column">
          <h1 class="ui header">
            <div class="ui medium header">
              <!--<i class="announcement icon"></i>-->
              Comparte
            </div>
          </h1>
          <p>Si te gustó, no lo dudes y compartilo! Por vos comienza el cambio.</p>
        </div>
        <div class="six wide left floated column">
          <img src="assets/images/firm.jpg" class="ui large bordered rounded image">
        </div>
      </div>
    </div>
    <a class="ye7scroll" href="#se-parte"><i class="ye7 arrow green tobotom centered"></i></a>
  </div>

  <div id="se-parte" class="ui vertical stripe segment">
      <div class="ui middle aligned stackable grid container">
        <div class="row">
          <div class="eight wide column">
              <div class="ui header">
                <div class="ui huge header">Se parte.</div>
              </div>
              <p>Queremos que tu experiencia con Dios sea la mejor, y por eso intentamos mejorar tu experiencia cada día.</p>
              <p></p>
              <p>Pero necesitamos que nos ayudes diciendo que no te gusta y que quisieras encontrar en este espacio en donde solo vos y Dios.</p>
              <p></p>
              <a class="ui huge green button" href="/sugerencias"> Tengo una idea <i class="right idea icon"></i> </a>
          </div>
          <div class="six wide right floated column">
            <img src="assets/images/firm.jpg" class="ui large bordered rounded image">
          </div>
        </div>
      </div>
      <a class="ye7scroll" href="#quienes-somos"><i class="ye7 arrow white tobotom centered"></i></a>
    </div>

    <div id="quienes-somos" class="ui vertical stripe segment">
      <div class="ui middle aligned stackable grid container">
        <div class="row">
          <div class="sixteen wide column">
              <div class="ui header">
                <div class="ui huge centered header">¿Quienes somos?</div>
              </div>
              <div style="margin-top:60px;" class="ui stackable grid">
                <div class="four column centered row">
                  <div class="column">
                    <img class="ui small circular centered image" src="../assets/images/tito.jpg">
                    <div class="ui centered header">Tito Villanueva</div>
                    <div class="sub header">Comunicación Social</div>
                  </div>
                  <div class="column">
                    <img class="ui small circular centered image" src="../assets/images/dahngeek.jpg">
                    <div class="ui centered header">Daniel Xutuc</div>
                    <div class="sub header">Ingeniería en Sistemas</div>
                  </div>
                  <div class="column">
                    <img class="ui small circular centered image" src="../assets/images/brian.jpg">
                    <div class="ui centered header">Brian Chalá</div>
                     <div class="sub header">Teología</div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

  <div class="ui inverted blue vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Acerca de</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Mapa del sitio</a>
            <a href="#" class="item">Contacto</a>
          </div>
        </div>
        <div class="ten wide column">
          <h4 class="ui inverted header">El procedimiento...</h4>
          <p>Esta es una forma de estudiar tu biblia, obtener resultados y guía a lo largo de tu estudio.</p>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Acerca de</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Mapa del sitio</a>
            <a href="#" class="item">Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop