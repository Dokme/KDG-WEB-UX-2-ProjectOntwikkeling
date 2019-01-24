@extends('layouts.master')

@section('title', $title)

@section('content')
<div class="container mt-5">
  <h1 class="text-center red">Verhaalreview<small> - {{$testimonial->published?'':'niet '}}gepubliceerd</small></h1>
</div>
<div class="container mt-1" style="">
  <span class="d-flex align-items-center">
    <a href='{!! route('admin.index') !!}' class="btn buttonBlue">Admin Panel</a>
    @if ($testimonial->updated_at == $testimonial->created_at)
    <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success ml-1">Publiceren</a>
    <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger ml-1">Weerhouden</a>
    @else
      @if($testimonial->published)
      <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger ml-1">Weerhouden</a>
      @else
      <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success ml-1">Publiceren</a>
      @endif
      @if ($testimonial->highlight)
      <a
        title='Dit verhaal wordt bovenaan weergegeven'
        href="{!! route('admin.highlight', ['id' => $testimonial->id]) !!}"
        class='ml-1'
        ><i class="fas fa-star fa-2x yellow"></i>
      </a>
      @else
      <a href="{!! route('admin.highlight', ['id' => $testimonial->id]) !!}" class='ml-1 text-dark no-highlight'><i class="far fa-star fa-2x"></i></a>
      @endif
    @endif
  </span>
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
