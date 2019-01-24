@extends('layouts/master')

@section('title', $title)

@section('content')
<div class="container mt-3">
  <h1 class="text-center red">Hun verhaal</h1>
  <p class='text-center'>Hier delen anderen hun persoonlijke ervaringen met seksueel grensoverschrijdend gedrag. <br> Probeer ervan te leren, steek er iets van op en als je zelf iets wil delen, kan het met onderstaande knop.</p>
</div>
<div class="container mt-3">
  <a href="{!! route('testimonials.create') !!}" class="btn buttonBlue shadow link white">Deel je verhaal</a>
  <div class="card-columns mt-2">
  @if ($highlight)
    <div class="card shadow mt-2">
      <div class="card-body">
        <div class="card-title d-flex align-items-center" title='Dit verhaal is een aanrader om te lezen.'>
          <i class="fas fa-star yellow"></i>
          <h4 class='ml-1 m-0'>{{ $highlight->title }}</h4>
        </div>
        @php
          $body = strip_tags($highlight->body);
        @endphp
        <div class="card-text">@truncate($body, 500)</div>
      </div>
      <div class="card-footer">
        <p><a href="{!! route('testimonials.show', ['id' => $highlight->id]) !!}">Lees meer</a></p>
      </div>
    </div>
  @endif
  @foreach ($testimonials as $testimonial)
    <div class="card shadow mt-2">
      <div class="card-body">
        <div class="card-title"><h4>{{ $testimonial->title }}</h4></div>
        @php
          $body = strip_tags($testimonial->body);
        @endphp
        <div class="card-text">@truncate($body, 500)</div>
      </div>
      <div class="card-footer">
        <p><a href="{!! route('testimonials.show', ['id' => $testimonial->id]) !!}">Lees meer</a></p>
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection
