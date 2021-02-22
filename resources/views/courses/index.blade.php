@extends('layouts.app')

@section('title')
Courses
@endsection

@section('content')

    <h1>All Courses</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->created_at }}</td>
                    <td>{{ $course->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection