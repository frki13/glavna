@extends('layouts.app')
    @section('content')
    <div class="alert alert-info">
        <h4>Unos nove posiljke</h4>
        </div>
<div class="container">
    <div class="well">
        {!! Form::open(['action'=>'PostController@store','method'=>'POST']) !!}
	    <div class="form-group">
            {{Form::label('name', 'Ime i prezime')}}
            {{ Form::text('name','',['class'=> 'form-control', 'placeholder' => 'Unesite ime primaoca posiljke']) }}
        </div>
        <div class="form-group">
            {{Form::label('status', 'Status')}}
            {{ Form::text('status','Poslana',['class'=> 'form-control']) }}
        </div>
        <div class="form-group">
            {{Form::label('zarada', 'Zarada')}}
            {{ Form::text('zarada','',['class'=> 'form-control', 'placeholder' => 'Unesite konacnu zaradu na posiljci']) }}
        </div>
        <div class="form-group">
            {{Form::label('prodao', 'Operater')}}
            {{ Form::text('prodao','',['class'=> 'form-control', 'placeholder' => 'Operater']) }}
            <hr>
            {{ Form::submit('Snimi',['class'=> 'btn btn-primary']) }}
        </div>
    </div>
</div>
        {{ Form::close()}}

    @endsection

