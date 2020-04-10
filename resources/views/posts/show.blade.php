@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="card bg-light mb-3" style="max-width: 50%;">
            <div class="card-header">Posiljka broj: {{$post->id}}.             <a type="button" class="float-right btn btn-primary  btn-sm" href="\posts">Vrati se nazad na pregled</a> <hr>
            </div>
            <div class="card-body">
            <h5 class="card-title">Ime: <strong>{{$post->name}}</strong></h5>
            <p class="card-text">Trenutni status posiljke: <strong>{{ $post->status }}</strong>.</p>
            <p class="card-text">Datum kreiranja posiljke: <strong>{{ $post->created_at }}</strong>.</p>
            <p class="card-text">Datum zadnje izmjene: <strong>{{ $post->updated_at }} od korisnika {{$post->prodao}}</strong>.</p>
            <p class="card-text">Ostvarena zarada: <strong>{{ $post->zarada }} KM</strong>.</p>



        </div>
        <hr>
        <a type="button" class="btn btn-primary  btn-sm" href="/posts/{{$post->id}}/edit">Izmijeni podatke posiljke</a>
        {!! Form::open(['action'=>['PostController@destroy', $post->id], 'method'=> 'POST', 'class' => 'btn btn-danger  btn-sm']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{ Form::submit('Obrisi posiljku iz sistema',['class'=> 'btn btn-danger  btn-sm']) }}
        {!! Form::close() !!}
        <hr>
    </div>
    @endsection

