@extends('layouts.master')

@section('title', $title)

@section('content')
  <div class="container mt-5">
      <h1 class="text-center red">Jouw verhaal</h1>
  </div>
  <div class="container mt-5">
    <a href="{{ url()->previous() }}" class="btn buttonBlue shadow link white">
      <i class="fas fa-arrow-left"></i> Keer terug
    </a>
  </div>
  <div class="container mt-5">
      <div class="col align-self-center">
        <form action="{!! route('testimonials.post') !!}" method="post">
          @csrf
          <div class="form-group">
            @if (!$errors->first('email'))
            <label for="email">E-mailadres:
            @else
            <label for="email" class='red'>
              <strong>E-mailadres: 
              <span class='red'>
              {{ $errors->first('email') }}
              </span>  
            </strong>
            @endif  
            </label>
            <input 
            name="email" type="email" class="form-control shadow" 
            id="email" aria-describedby="email" placeholder="Geef je e-mailadres op" 
            value="{{ old('email') }}" required>
          </div>
          <div class="form-group">
            @if (!$errors->first('title'))
            <label for="title">Titel:
            @else
            <label for="title" class='red'>
              <strong>Titel
              <span class='red'>
              {{ $errors->first('title') }}
              </span>  
            </strong>
            @endif  
            </label>
            <input 
            name="title" type="text" class="form-control shadow" 
            id="title" placeholder="Schrijf hier je titel" 
            value="{{ old('title') }}" required>
          </div>
          <div class="form-group">
            @if (!$errors->first('body'))
            <label for="body">Jouw verhaal:
            @else
            <label for="body" class='red'>
              <strong>Jouw verhaal
              <span class='red'>
              {{ $errors->first('body') }}
              </span>  
            </strong>
            @endif  
            </label>
            <textarea 
            name="body" class="form-control shadow" rows="10" 
            id="body" required>{{ old('body') }}</textarea>
          </div>
          <p class="red">
            <small>
              <strong>
                Het delen van jouw verhaal gebeurt in volledige anonimiteit. 
                Je e-mailadres wordt niet getoond.<br/>
                Ook wordt je verhaal eerst in vertrouwen gecontroleerd 
                door onze medewerkers vooraleer deze op onze website wordt getoond.
              </strong>
            </small>
          </p>
          <button type="submit" class="btn buttonGreen shadow">Deel jouw verhaal</button>
        </form>
      </div>
  </div>
@endsection
