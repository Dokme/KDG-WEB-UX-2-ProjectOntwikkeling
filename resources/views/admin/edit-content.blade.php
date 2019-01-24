@extends('layouts/master')

@section('title', 'Admin | Content bewerken')

@push('styles')
<!-- include summernote css/js-->
<link href="{!! asset('css/summernote.css') !!}" rel="stylesheet">
@endpush

@section('content')
  <div class="container mt-5">
  <h1 class="text-center red">Admin | Content bewerken</h1>
  </div>
  <div class="container mt-5 mb-3">
    <a href="{!! route('admin.index') !!}" class="btn buttonBlue shadow link white"><i class="fas fa-arrow-left"></i> Admin Panel</a>
  </div>
  <div class="container mt-2">
        <p><strong>Dit contentblok is van de '{{ $content->webpage }}'-pagina.</strong></p>
        <form action="{!! route('admin.post-content') !!}" method="post">
          @csrf
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
              <input name="title"  type="text" class="form-control shadow"
              id="title" aria-describedby="title" placeholder="Omschrijving van de content"
              value="{{ $content->title or old('title') }}" required>
          </div>
          <div class="form-group">
            @if (!$errors->first('body'))
            <label for="summernote">Inhoud:
            @else
            <label for="summernote" class='red'>
              <strong>Inhoud
              <span class='red'>
              {{ $errors->first('body') }}
              </span>  
            </strong>
            @endif  
            </label>
            <textarea id="summernote" name="body" class="form-control shadow" rows="10">{{ $content->body or old('body') }}</textarea>
          </div>
          <input type="hidden" name="id" value="{{ $content->id }}">
          <button type="submit" class="btn buttonGreen shadow">Sla content op</button>
        </form>
  </div>
@endsection

@push('scripts')
<script src="{!! asset('js/summernote.js') !!}"></script>
<script src="{!! asset('js/summernote-nl-NL.js') !!}"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({ lang: 'nl-NL' });
});
</script>
@endpush
