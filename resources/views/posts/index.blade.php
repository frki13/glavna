@extends('layouts.app')
@section('content')
<div class="container">
<div class="alert alert-info">
<h4>Pregled ili izmjena posiljki</h4>
</div></div>
<div class="container">
    <div class="table-responsive">
<table class="table table-bordered table-striped">
    <thead class=" table-dark">
        <tr style="text-align:center">
          <th scope="col">ID</th>
          <th scope="col">Ime i prezime</th>
          <th scope="col">Status posiljke</th>
          <th scope="col">Zarada</th>
          <th scope="col">Operacije</th>

        </tr>
      </thead>

    @foreach ($posts as $post)


              <tr style="text-align:center">
                <th>{{$post->id}}</th>
                <td> <a href="\posts\{{$post->id}}">{{$post->name}}</a></td>
                <td>{{$post->status}}</td>
                <td>{{$post->zarada}}</td>
                <div class="btn-group">
                <td><a type="button" class="btn btn-primary " href="/posts/{{$post->id}}/edit">Izmijeni</a>
                    {!! Form::open(['action'=>['PostController@destroy', $post->id], 'method'=> 'POST', 'class' => 'btn btn-danger  btn-sm']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{ Form::submit('Obrisi',['class'=> 'btn btn-danger  btn-sm']) }}
                    {!! Form::close() !!} </td>  </div>
              </tr>
            </div>
        </div>
    @endforeach
        {{ $posts->links() }}




@endsection


