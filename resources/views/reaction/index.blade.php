@extends('layouts.master')

@section('title', $title)

@section('content')
  @if (count($scenarios) > 0)
  <div class="container mt-3">
    <h1 class="text-center red">Hoe moet je reageren bij volgende situaties</h1>
  </div>
  <div class="container mb-5">
    <h4>Hieronder vind je enkele situaties waarbij je een goede en slechte reactie ziet.</h4>
  </div>

  <div class="container wat">
    @foreach ($scenarios as $scenario)
      <div class="card shadow">
        <a data-toggle="collapse" href="#scenario-{{$scenario->id}}" aria-expanded="true" aria-controls="scenario-{{$scenario->id}}" class='situation-toggle collapsed'>
          <div class="card-header d-flex justify-content-between align-items-center text-dark situation-header p-3">
            <h5 class='m-0'>
              <strong>
                {{ $scenario->name }}
              </strong>
            </h5>
            <i class="fa fa-angle-down arrow"></i>
          </div>
        </a>
        <div id="scenario-{{$scenario->id}}" class="collapse">
          <div class="card-block p-3">
            <div class="row p-2 mb-3">
              <div class="col-2 offset-sm-1">
                <i class="fas fa-plus-circle"></i>
              </div>
              <div class="col-8 good ml-3 ">
                {{ $scenario->good }}
              </div>
              </div>
              <div class="row p-2">
                <div class="col-2 offset-sm-1">
                  <i class="fas fa-minus-circle"></i>
                </div>
                <div class="col-8 good ml-3">
                  {{ $scenario->bad }}
                </div>
              </div>
            </div>
          </div>
        </div>
    @endforeach
  </div>
  @endif
  <div class=" container wat p-5">
    <h1 class="text-center red">Speel ons spel en test je kennis!</h1>
    <div id='game' class="game-wrapper container bggrey p-5 pointer">
      <div class="webgl-content" onclick="startGame()">
      <div id="overlay" class='shadow d-flex justify-content-center align-items-center flex-column'>
        <img src="{{ asset('images/controller.png') }}" alt="Speel het spel">
        <h4>Klik om te starten!</h4>
      </div>
      <div id="gameContainer"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">3WEB23D</div>
      </div>
      </div>
    </div>
  </div>
  @endsection
  @push('styles')
  <link rel="stylesheet" href=" {{asset('game/TemplateData/style.css')}} ">
  <style>
    .game-wrapper {
      position: relative;
      min-height: 50vh;
    }
    #overlay {
      background-image: url('images/bg-game.png');
      cursor: pointer;
      position: absolute;
      top: 0;
      left:0;
      width: 100%;
      height: 100%;
      background-color: white;
    }
  </style>
  @endpush
  @push('top-scripts')
  <script src="{{asset('game/TemplateData/UnityProgress.js')}}"></script>  
  <script src=" {{asset('game/Build/UnityLoader.js')}}"></script>
  <script>
    var i =0;
    var gameInstance;
    function startGame(){
      if(i === 0){
        gameInstance = UnityLoader.instantiate("gameContainer", "  {{asset('game/Build/Build.json')}} ", {onProgress: UnityProgress});
        i++;
      }
      var overlay = document.getElementById('overlay');
      $(overlay).remove();
    }
  </script>
  @endpush
