@extends('layouts.master')

@section('title', $title)

@section('content')
  <div class="container mt-5">
    <h1 class="text-center red">Gelukt!</h1>
  </div>

  <div class="text-center">
      <i class="fas fa-thumbs-up green fa-10x"></i>
  </div>
  <div class="text-center" style="margin-top: 10vh;">
      <h2>Bedankt voor jouw verhaal.</h2>
      <h2>We behandelen het in alle vertrouwen.</h2>
  </div>
  <div class="text-center" style="margin-top: 10vh; margin-bottom: 10vh;">
    <a href="{!! route('testimonials.index') !!}" class="btn buttonBlue shadow">Bekijk alle verhalen</a>
  </div>
@endsection
