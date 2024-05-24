<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    <form method="POST" action="{{ route('admin.update.student', $student->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $student->name }}" required>
        </div>

        <div>
            <label>Year:</label>
            <input type="text" name="year" value="{{ $student->year }}" required>
        </div>

        <div>
            <label>Course:</label>
            <input type="text" name="course" value="{{ $student->course }}" required>
        </div>

        <div>
            <label>Section:</label>
            <input type="text" name="section" value="{{ $student->section }}" required>
        </div>

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="{{ $student->username }}" required>
        </div>

        <button type="submit">Update Student</button>
    </form>
@endsection


</body>
</html>
