@extends('layouts/master')

@section('title', $title)

@section('content')
<div class="container mt-2">
  <div class="row">
    <div class="col justify-content-center d-flex px-2">
      <h1 class="red text-center">Wat is intimidatie nu eigenlijk?</h1>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col">
      <figure class="figure">
        <img src="{!! asset('images/intimidatie2.jpg') !!}" class="figure-img img-fluid" alt="Jongen leunt over meisje in gang">
        <figcaption class="figure-caption">Jongen leunt over meisje in gang</figcaption>
      </figure>
    </div>
  </div>
  <div class="row my-2">
    <div class="col-md-6 col-lg-4 px-2">
      {!! $content[0]->body !!}
    </div>
  </div>
  <div class="row mt-3 d-flex justify-content-between">
    <div class="col-lg-5 col-md-6">
        <figure class="figure">
          <img src="{!! asset('images/intimidatie1.jpg') !!}" class="figure-img img-fluid" alt="Jongen staat dichtbij meisje">
          <figcaption class="figure-caption">Jongen staat dichtbij meisje</figcaption>
        </figure>
    </div>
    <div class="col-lg-6 col-md-6 px-2 py-2">
      <p>
        {!! $content[1]->body !!}
      </p>
    </div>
  </div>
  <div class="row mt-5 mb-5">
    <div class="col px-2">
      <h2 class="mb-3">Welke vormen zijn er</h2>
    </div>
  </div>
  <div class="row">
    <div class="col px-2">
      <div class="card-deck">
        @php
          $range = range(2,4);
        @endphp
        @foreach ($range as $num)
          <div class="card shadow m-4 ">
            <div class="card-body">
              <div class="card-title red">
                <h3>{{ $content[$num]->title }}</h3>
              </div>
              <div class="card-text">{!! $content[$num]->body !!}</div>
            </div>
          </div>
          <div class="w-100 d-none d-sm-block d-lg-none"><!-- wrap every 2 on sm--></div>
        @endforeach
      </div>
    </div>
  </div>    
  <div class="row mt-5">
    <div class="col px-2 mt-2 ">
      <h2 class="mb-4">{{ $content[5]->title }}</h2>
      {!! $content[5]->body !!}
    </div>
  </div>

  <div class="row mt-5 mb-3">
    <div class="col d-md-flex justify-content-end px-2">
      <h2>{{ $content[7]->title }}</h2>
    </div>
  </div>
  <div class="row d-flex justify-content-between">
    <div class="col-md-4 d-flex justify-content-center">
      <figure class="figure">
        <img src="{!! asset('images/intimidatie3.jpg') !!}" class="figure-img img-fluid" alt="Meisje wordt aangeraakt door vreemdeling">
        <figcaption class="figure-caption">Mag de onbekende man deze vrouw aanraken?</figcaption>
      </figure>
    </div>
    <div class="col-md-6 px-2">
      {!! $content[7]->body !!}
    </div>
  </div>



  <div class="row mt-5 mb-3">
    <div class="col d-md-flex justify-content-end px-2 mb-5">
      <h2>{{ $content[9]->title }} </h2>
    </div>
  </div>
  <div class="row ml-0 mr-0 ">
    <div class="col-md-4 text-md-center mb-5 px-2">
      <h4 class="red text-center">{{ $content[10]->title }}</h4>
      <br>
      <p class="text-center">{!! $content[10]->body !!}  </p>
      <img src="{!! asset('images/statistiek12.png') !!}" class="img-fluid mb-3 " alt="">
    </div>
    <div class="col-md-4 text-md-center mb-5 px-2 ">
      <h4 class="red text-center">{{ $content[11]->title }}</h4>
      <br>
      <p class="text-center" >{!! $content[11]->body !!}  </p>
      <h5 class="text-center">3 op de 10 meisjes</h5>
      <div class="text-center">
        @for ($i = 0; $i < 10; $i++)

          @if ($i < 3)
          <i class="fas fa-female red text-center"></i>
          @else
          <i class="fas fa-female text-center"></i>
          @endif
          @endfor
      </div>      
      <h5 class="text-center mt-5">3 op de 100 jongens</h5>
      <div class="text-center pl-5 pr-5">
          @for ($i = 0; $i < 5; $i++)
          
          @for ($y=0 ; $y < 20; $y++)
          @if ($i==0 && $y < 3 )
          <i class="fas fa-male red"></i>
          @else
          <i class="fas fa-male"></i>
          @endif
          @endfor
          
          @endfor
      </div>
    </div>
    <div class="col-md-4 text-md-center  px-2">
      <h4 class="red text-center "> {{ $content[12]->title }}</h4>
      <br>
      <p class="text-center">{!! $content[12]->body !!} </p>
      <img src="{!! asset('images/statistiek3-2.png') !!}" class="img-fluid pl-5 pr-5 mb-3 " alt="">
    </div>
  </div>
  <div class="row d-flex justify-content-between mb-5">
    <div class="col ml-0 px-2"> 
      <h2 class='mb-3'> {{ $content[8]->title }} </h2>
      {!! $content[8]->body !!}
    </div>
  </div>
  <div class="row mt-5">
    <div class="col px-2">
      <h2 class='mb-3'> {{ $content[13]->title }} </h2>
      {!! $content[13]->body !!}
      <a href="{!! route('contact.index') !!}" class="btn buttonBlue shadow link white mt-5"> Klik voor meer info </a>
    </div>
  </div>
</div>


@endsection
