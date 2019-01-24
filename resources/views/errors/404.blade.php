@extends('layouts.master')

@section('title', 'Deze pagina vinden we even niet...')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center d-flex">
    <div class="col text-center">
      <h1>Oei! Deze pagina vinden we even niet...</h1>
      <a href="{{ url()->previous() }}">
        <img src="{!! asset('images/ga-terug-naar-start.jpg') !!}" alt="Ga terug naar start" class='img-fluid image-404'>
      </a>
    </div>
  </div>
</div>
@endsection
