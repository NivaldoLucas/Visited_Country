<!-- resources/views/countries/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Country</h2>
        <form action="{{ route('countries.update', $country->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $country->name }}">
            </div>
            <div class="form-group">
                <label for="continent">Continent:</label>
                <input type="text" name="continent" id="continent" class="form-control" value="{{ $country->continent }}">
            </div>
            <div class="form-group">
                <label for="ddd">DDD:</label>
                <input type="text" name="ddd" id="ddd" class="form-control" value="{{ $country->ddd }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $country->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="year_visited">Year Visited:</label>
                <input type="text" name="year_visited" id="year_visited" class="form-control" value="{{ $country->year_visited }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
