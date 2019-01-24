@extends('layouts.master')

@section('title', $title)

@section('content')
<div class="container mt-5">
  <h1 class="text-center red">Hun verhalen</h1>
</div>
<div class="container mt-5">
  <a href="{!! route('testimonials.index') !!}" class="btn buttonBlue shadow link white"><i class="fas fa-arrow-left"></i> Keer terug</a>
  <a href="{!! route('testimonials.create') !!}" class="btn buttonBlue shadow link white">Deel je verhaal</a>
</div>
<div class="container mt-5" style="">
    <div class="card shadow">
      <div class="card-body  ">
          <h5 class="card-title">{{$testimonial->title}}</h5>
          <p class="card-text">{!! $testimonial->body !!}</p>
          <p  class="pt-5 grey" >
            geupload op <u><date>{{ $testimonial->created_at }}</date></u><br>
          </p>
      </div>
    </div>
</div>
@endsection
