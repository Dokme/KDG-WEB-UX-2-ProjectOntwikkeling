@extends('layouts.master') @section('title', $title) @section('content')
<div class="container mt-3">
  <h1 class="text-center red">Waar kan je terecht?</h1>
</div>
<div class="container mt-5">
  <h2 class="text-center black">{{ $content[0]->title }}</h2>
  <div class="card shadow mt-5 mt-3">
    <div class="card-body">
      <div class="card-text">
        <p>{!! $content[0]->body !!}</p>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <h2 class="text-center black">{{ $content[1]->title }}</h2>
  <div class="card shadow mt-5 mt-3">
    <div class="card-body">
      <div class="card-text">
        <p>{!! $content[1]->body !!}</p>
      </div>
    </div>
  </div>
  <div class="card-deck mt-5">
    <div class="card shadow mt-5 mt-3">
      <div class="card-img-top card-image">
        <img class='img-fluid h-100' src="{!! asset('images/jac.png') !!}" alt="Jac">
      </div>
      <div class="card-body">
        <div class="card-title">
          <h5>{{ $content[2]->title }}</h5>
        </div>
        <div class="card-text">{!! $content[2]->body !!}</div>
      </div>
      <div class="card-footer">
        <a href="http://www.jac.be/chat" target="_blank">Ga naar de chat</a>
      </div>
    </div>
    <div class="card shadow mt-5 mt-3">
      <div class="card-img-top card-image">
        <img class='img-fluid h-100' src="{!! asset('images/awel.png') !!}" alt="Awel">
      </div>
      <div class="card-body">
        <div class="card-title">
          <h5>{{ $content[3]->title }}</h5>
        </div>
        <div class="card-text">{!! $content[3]->body !!}</div>
      </div>
      <div class="card-footer">
        <a href="http://www.awel.be/chat" target="_blank">Ga naar de chat</a>
      </div>
    </div>
    <div class="card shadow mt-5 mt-3">
      <div class="card-img-top card-image"><img class='img-fluid h-100' src="{!! asset('images/tele-onthaal.png') !!}" alt="Tele-onthaal"></div>
      <div class="card-body">
        <div class="card-title">
          <h5>{{ $content[4]->title }}</h5>
        </div>
        <div class="card-text">{!! $content[4]->body !!}</div>
      </div>
      <div class="card-footer">
        <a href="http://www.tele-onthaal.be" target="_blank">Ga naar de chat of hulplijn</a>
      </div>
    </div>
  </div>
  <div class="card-deck">
    <div class="card shadow mt-5 mt-3 carditem">
      <div class="card-img-top card-image">
        <img class='img-fluid h-100' src="{!! asset('images/nupraatikerover.jpg') !!}" alt="Nu praat ik erover">
      </div>
      <div class="card-body">
        <div class="card-title">
          <h5>{{ $content[5]->title }}</h5>
        </div>
        <div class="card-text">{!! $content[5]->body !!}</div>
      </div>
      <div class="card-footer">
        <a href="http://www.nupraatikerover.be/" target="_blank">Ga naar de chat</a>
      </div>
    </div>
    <div class="card shadow mt-5 mt-3">
      <div class="card-img-top card-image">
        <img class='img-fluid' src="{!! asset('images/clbchat.png') !!}" alt="CLB Chat">
      </div>
      <div class="card-body">
        <div class="card-title">
          <h5>{{ $content[6]->title }}</h5>
        </div>
        <div class="card-text">{!! $content[6]->body !!}</div>
      </div>
      <div class="card-footer">
        <a href="https://www.clbchat.be/" target="_blank">Ga naar de chat</a>
      </div>
    </div>
    <div class="card shadow mt-5">
      <div class="card-img-top card-image">
        <img class='img-fluid h-100' src="{!! asset('images/1712.jpg') !!}" alt="Jac">
      </div>
      <div class="card-body">
        <div class="card-title">
          <h5>{{ $content[7]->title }}</h5>
        </div>
        <div class="card-text">{!! $content[7]->body !!}</div>
      </div>
      <div class="card-footer">
        <a href="https://1712.be/" target="_blank">Ga naar de hulplijn</a>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <h2 class="text-center black">{{ $content[8]->title }}</h2>
  <div class="card shadow mt-5 mt-3">
    <div class="card-body">
      <div class="card-text">
        {!! $content[8]->body !!}
      </div>
    </div>
  </div>
</div>
@endsection
