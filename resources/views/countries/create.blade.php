<!-- resources/views/countries/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Country</h2>
        <form action="{{ route('countries.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="continent" class="form-label">Continent</label>
                <input type="text" class="form-control" id="continent" name="continent" required>
            </div>
            <div class="mb-3">
                <label for="ddd" class="form-label">DDD</label>
                <input type="text" class="form-control" id="ddd" name="ddd" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="year_visited" class="form-label">Year Visited</label>
                <input type="text" class="form-control" id="year_visited" name="year_visited" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Country</button>
        </form>
    </div>
@endsection
