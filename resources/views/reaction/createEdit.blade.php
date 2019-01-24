@extends('layouts.master')
@section('title', $title)
@section('content')
  <div class="container mt-5">
    @if (Request::is('admin/scenarios/toevoegen'))
      <h1 class="text-center red">Admin | Scenario toevoegen</h1>
    @else
      <h1 class="text-center red">Admin | Scenario bewerken</h1>
    @endif
  </div>
  <div class="container mt-5 mb-3">
    <a href="{!! route('admin.index') !!}" class="btn buttonBlue shadow link white"><i class="fas fa-arrow-left"></i> Admin Panel</a>
  </div>
  <div class="container mt-2">
      <div>
        <form action="{!! route('admin.post-scenario') !!}" method="post">
          @csrf
          <div class="form-group">
              @if (!$errors->first('description'))
            <label for="description">Omschrijving:
            @else
            <label for="description" class='red'>
              <strong>Omschrijving
              <span class='red'>
              {{ $errors->first('description') }}
              </span>  
            </strong>
            @endif 
            </label>
            <input name="description"  type="text" class="form-control shadow"
            id="description" aria-describedby="titel" placeholder="Omschrijving van het scenario"
            value="{{ $scenario->name or old('description') }}" required>
          </div>
          <div class="form-group">
            @if (!$errors->first('good'))
            <label for="good">Goede reactie:
            @else
            <label for="good" class='red'>
              <strong>Goede reactie
              <span class='red'>
              {{ $errors->first('good') }}
              </span>  
            </strong>
            @endif  
            </label>
            <textarea id="good" name="good" 
            class="form-control shadow" rows="10"
            placeholder="De goede reactie(s) op deze situatie" required>
              {{ $scenario->good or old('good') }}
            </textarea>
          </div>
          <div class="form-group">
            @if (!$errors->first('bad'))
            <label for="bad">Slechte reactie:
            @else
            <label for="bad" class='red'>
              <strong>Slechte reactie
              <span class='red'>
              {{ $errors->first('bad') }}
              </span>  
            </strong>
            @endif  
            </label>
            <textarea id="bad" name="bad" 
            class="form-control shadow" rows="10" 
            placeholder="De slechte reactie(s) op deze situatie" required>
              {{ $scenario->bad or old('bad') }}
            </textarea>
          </div>
          <input type="hidden" name="id" value="{{ $scenario->id or '' }}">
          <button type="submit" class="btn buttonGreen shadow">Sla scenario op</button>
        </form>
      </div>
  </div>
@endsection
