@extends('layouts/master')

@section('title', 'Admin | Wat is het?')

@section('content')
<div class="container">
  <div class="card w-80 mx-auto mt-5 shadow">
    <div class="card-body">
      <div class="card-title">
        <h2>Voeg een nieuwe sectie toe aan de <i>Wat?</i>-pagina</h1>
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

  <h2 class='mt-3'>Overzicht van huidige secties:</h2>

  @foreach ($sections as $section)
  <div class="card mt-2 shadow">
      <div class="card-header d-flex justify-content-between">
        @if ($section->published)
        <span class="left">
          <date class='align-self-center'>Laatst geupdatet: {{ $section->updated_at}}</date>
          <span class="badge badge-success">Gepubliceerd</span>
        </span>
        {!! Form::open(['route' => 'admin.toggle_published', 'method' => 'POST', 'class' => 'd-inline']) !!}
        <button type='submit' name='id' value='{{ $section->id }}' class="btn btn-warning">Verbergen</button>
        {!! Form::close() !!}
        @else
        <span class="left">
          <date class='align-self-center'>Laatst geupdatet: {{ $section->updated_at}}</date>
          <span class="badge badge-danger">Niet gepubliceerd</span>
        </span>
        {!! Form::open(['route' => 'admin.toggle_published', 'method' => 'POST']) !!}
        <button type='submit' name='id' value='{{ $section->id }}' class="btn btn-warning">Publiceren</button>
        {!! Form::close() !!}
        @endif

      </div>
      <div class="card-body">
        <div class="card-title">
          <h3>{{ $section->title }}</h3>
        </div>
        <div class="card-body">
          <p>
            {!! $section->body !!}
          </p>
        </div>
      </div>
      <div class="col-sm">

      </div>
  </div>
  @endforeach

  <br>
  <br>




  </div>
@endsection
