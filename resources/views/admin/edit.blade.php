@extends('layouts/master') @section('title', 'edit post') @section('content')



<div class="container text-center">
    <div class="text-center">
        <h1 class="m-5">Wijzigen van websectie</h1>
    </div>

    <div class="card card-default text-center py-5">




        <h2>Sectienaam: {{$websection->name}}</h2>


        {!! Form::open(['action' => 'AdminController@edit_data']) !!}

        <!-- name -->
        {{ Form::label('name', 'Omschrijving') }}
        {{ Form::text('name',$websection->name, ['class' => 'col-md-4 control-label', 'id' => 'name_label']) }}

        {{ Form::hidden('id', $websection->id) }}   

        <!-- email -->
            

        {{ Form::submit('Wijzigen', ['class' => 'btn btn-success']) }}

    {{ Form::close() }}
    </div>
</div>

@endsection