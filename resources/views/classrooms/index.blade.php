@extends('layouts.app')

@section('title')
Classrooms
@endsection

@section('content')

    <h1>All Classrooms</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>number</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
                <tr>
                    <td>{{ $classroom->id }}</td>
                    <td>{{ $classroom->number }}</td>
                    <td>{{ $classroom->created_at }}</td>
                    <td>{{ $classroom->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection