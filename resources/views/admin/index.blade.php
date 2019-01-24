@extends('layouts/master')

@section('title', 'Admin')

@section('content')

<div class="container">
  <h1 class="text-center red mt-5">Admin Panel</h1>
  <p>Hier kan de admin de content op de pagina aanpassen. Per sectie van de website zal je hier ook een onderdeel terugvinden. Daaronder staat dan diens content.</p>
  <span>
    <a href="#what" class="btn btn-outline-primary admin-btn">Wat is het?</a>
    <a href="#reaction" class="btn btn-outline-primary admin-btn">Hoe reageren?</a>
    <a href="#testimonials" class="btn btn-outline-primary admin-btn">Hun verhalen</a>
    <a href="#contact" class="btn btn-outline-primary admin-btn">Waar terecht?</a>
  </span>
  @include('admin.components.newTestimonial', ['unseen', $unseen])
  @include('admin.components.what')
  @include('admin.components.reaction', ['scenarios' => $scenarios])
  @include('admin.components.testimonials', ['unseen' => $unseen, 'seen' => $seen])
  @include('admin.components.contact')
</div>

{{-- <div class="container">
  <div class="card mx-auto mt-5 shadow">
    <div class="card-body">
      <div class="card-title">
        <h2>Voeg een nieuwe sectie toe aan de <i>Wat is het?</i>-pagina</h1>
      </div>
      {!! Form::open(['class' => 'form-horizontal', 'method' => 'POST', 'route' => 'admin.create-section']) !!}

      <div class="form-group">
        {!! Form::label('name', 'Titel', ['id' => 'title']) !!}
        {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Titel van de sectie']) !!}
      </div>
      <div class="form-group">
        <label for="body">Inhoud</label>
        <textarea class="form-control" id="body" rows="5" name='body'></textarea>
      </div>
      <div class="form-group">
        {!! Form::submit('Toevoegen',['class' => 'btn btn-success']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div> --}}
@endsection

@push('scripts')
  <script type="text/javascript">
  $('.admin-btn').click(function(e){
    e.preventDefault();
    var goal = e.target.hash.replace('#', '');
    document.getElementById(goal).scrollIntoView({behavior: 'smooth'});
  });
  </script>
@endpush
