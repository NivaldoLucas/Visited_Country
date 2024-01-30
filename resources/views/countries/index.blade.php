<!-- resources/views/countries/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Visited Countries</h2>
        <a href="{{ route('countries.create') }}" class="btn btn-primary">Add Country</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Continent</th>
                    <th>DDD</th>
                    <th>Description</th>
                    <th>Year Visited</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->continent }}</td>
                        <td>{{ $country->ddd }}</td>
                        <td>{{ $country->description }}</td>
                        <td>{{ $country->year_visited }}</td>
                        <td>
                            <a href="{{ route('countries.show', $country->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('countries.destroy', $country->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2><a class="title" href="https://www.linkedin.com/in/nivaldo-lucas/">Nivaldo Lucas</a></h2>
    </div>
@endsection
