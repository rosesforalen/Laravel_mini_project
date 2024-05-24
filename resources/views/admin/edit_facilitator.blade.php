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
    <div class="container">
        <h1>Edit Facilitator</h1>
        <form action="{{ route('admin.update.facilitator', ['id' => $facilitator->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $facilitator->name }}">
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" id="department" name="department" value="{{ $facilitator->department }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Facilitator</button>
        </form>
    </div>
@endsection

</body>
</html>
