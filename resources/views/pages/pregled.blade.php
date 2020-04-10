@extends('layouts.app')
@section('content')
<div class="container">
<div class="alert alert-info">
<h4>Pregled ili izmjena posiljki</h4>
</div></div>

@if(count($posts) > 1)
    @foreach ($posts as $post)
    <div class="card p-3 mt-3 mb-3">
        <h4>{{$post->name}}</h4>
    </div>
    @endforeach



@else
    <p>Nema unesenih posiljki.</p>
@endif

@endsection
