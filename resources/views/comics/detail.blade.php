@extends('layout.base')
@section('content')
    <div class="container lightgraybgr mt-5">
        <h2 class="mb-5">{{$comic['title']}}</h2>
        <div class="row">
            <div class="col-3"><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"></div>
            <div class="col-9">{{$comic['description']}}</div>
        </div>
        <div class="mt-3 row">
            <div class="col-2"><h4>{{$comic['price']}}€</h4></div>
            <div class="col-3">{{$comic['series']}} Series</div>
        </div>
        <div class="mt-3 row">
            <div class="col-12"><sup>Avaible from: {{$comic['sale_date']}}</sup></div>
        </div>
    </div>
@endsection