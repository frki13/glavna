@extends('layouts.app')
    @section('content')
    <div class="alert alert-info">
        <h4>Izmjena podataka posiljke za: {{ $post->name }} </h4>
        </div>
<div class="container">
    <div class="well">
        {!! Form::open(['action'=>['PostController@update',$post->id],'method'=>'POST']) !!}
	    <div class="form-group">
            {{Form::label('name', 'Ime i prezime')}}
            {{ Form::text('name',$post->name,['class'=> 'form-control', 'placeholder' => 'Unesite ime primaoca posiljke']) }}
        </div>
        <div class="form-group">
            {{Form::label('status', 'Status')}}
            {{ Form::text('status','Poslana',['class'=> 'form-control']) }}
        </div>
        <div class="form-group">
            {{Form::label('zarada', 'Zarada')}}
            {{ Form::text('zarada',$post->zarada,['class'=> 'form-control', 'placeholder' => 'Unesite konacnu zaradu na posiljci']) }}
        </div>
        <div class="form-group">
            {{Form::label('prodao', 'Operater')}}
            {{ Form::text('prodao',$post->prodao,['class'=> 'form-control', 'placeholder' => 'Operater']) }}
            {{ Form::hidden('_method', 'PUT') }}
            <hr>
            {{ Form::submit('Potvrdi izmjene',['class'=> 'btn btn-primary']) }}
        </div>
    </div>
</div>
        {{ Form::close()}}

    @endsection

