<!-- resources/views/countries/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $country->name }}</h2>
        <p><strong>Continent:</strong> {{ $country->continent }}</p>
        <p><strong>DDD:</strong> {{ $country->ddd }}</p>
        <p><strong>Description:</strong> {{ $country->description }}</p>
        <p><strong>Year Visited:</strong> {{ $country->year_visited }}</p>
        <a href="{{ route('countries.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
