@extends('layout.base')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Collection</th>
            {{-- <th scope="col">Thumb</th> --}}
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic['id']}}</th>
                    <td>{{$comic['series']}}</td>
                    {{-- <td><img class="table_thumbnails" src="{{$comic['thumb']}}" alt="{{$comic['title']}}"></td> --}}
                    <td>{{$comic['title']}}</td>
                    <td><a href="/comics/{{$comic['id']}}"><button type="button" class="btn btn-secondary">Details</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection