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
                    <td class="stdwidth d-flex">
                        <a href="/comics/{{$comic['id']}}"><button type="button" class="btn btn-secondary">Details</button></a>
                        <a href="/comics/{{$comic['id']}}/edit"><button type="button" class="btn btn-warning">Modify</button></a>
                        <button id="deletelayout{{$comic['id']}}" onclick="displayForm({{$comic['id']}})" type="button" class="btn btn-danger">Delete</button>
                        <div id="modale{{$comic['id']}}" class="d-none modale">
                            <div id="messaggio" class="messaggio">
                                <h2 class="mt-4">warning message:</h2>
                                <p>sei sicuro di voler cancellare il record "{{$comic['title']}}"?</p>
                                <div class="d-flex justify-content-center">
                                    <form action="{{ route('comics.destroy', $comic['id'] ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn-danger btn" value="Confirm">
                                    </form>
                                    <button onclick="hideForm({{$comic['id']}})" class="btn ml-3 btn-primary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="{{asset('js/comics.js')}}"></script>
@endsection