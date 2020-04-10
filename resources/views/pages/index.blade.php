@extends('layouts.app')
    @section('content')
        <div class="container">

        <div class="card mb-4 shadow-sm">
            <div class="card-header">
            <h4 class="my-0 font-weight-normal">Dobrodosli na evidenciju posiljki. Izaberite opciju za nastavak</h4>
            </div>
            <div class="card-body">
            <a class="btn btn-lg btn-block btn-primary" href="posts/create">Unos nove posiljke</a>
            <a class="btn btn-lg btn-block btn-primary" href="posts">Pregled ili izmjena posiljki</a>

            </div>
        </div>
        </div></div>

    @endsection

