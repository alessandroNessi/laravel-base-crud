@extends('layout.base')
@section('content')
    <div class="container lightgraybgr mt-5">
        <form class="p-3" action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Comic Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Comic description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Comic thumbnails Url</label>
                <input type="text" class="form-control" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Comic price</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Comic series</label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">First date avaible</label>
                <input type="date" class="form-control" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic type</label>
                <input type="text" class="form-control" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection