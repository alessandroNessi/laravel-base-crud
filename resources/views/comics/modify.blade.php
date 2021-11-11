@extends('layout.base')
@section('content')
    <div class="container lightgraybgr mt-5">
        <form class="p-3" action="{{route('comics.update',$comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Comic Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title')?old('title'):$comic['title']}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Comic description</label>
                <textarea class="form-control" name="description" value="{{ old('description')?old('description'):$comic['description'] }}"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Comic thumbnails Url</label>
                <input type="text" class="form-control" name="thumb" value="{{ old('thumb')?old('thumb'):$comic['thumb'] }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Comic price</label>
                <input type="number" class="form-control" name="price" value="{{ old('price')?old('price'):$comic['price'] }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Comic series</label>
                <input type="text" class="form-control" name="series" value="{{ old('series')?old('series'):$comic['series'] }}">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">First date avaible</label>
                <input type="date" class="form-control" name="sale_date" value="{{ old('sale_date')?old('sale_date'):$comic['sale_date'] }}">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic type</label>
                <input type="text" class="form-control" name="type" value="{{ old('type')?old('type'):$comic['type'] }}">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection