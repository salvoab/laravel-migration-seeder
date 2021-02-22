@extends('layouts.app')

@section('title')
Students
@endsection

@section('content')

    <h1>All Students</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>lastname</th>
                <th>email</th>
                <th>phone</th>
                <th>dob</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->dob }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection