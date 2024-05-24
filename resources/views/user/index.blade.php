
@extends('layouts.admin')

@section('content')
    <h1>User Management</h1>

    <a href="{{ route('admin.user.create') }}" class="btn btn-primary mb-3">Add User</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Year</th>
                <th>Course</th>
                <th>Section</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->year }}</td>
                    <td>{{ $user->course }}</td>
                    <td>{{ $user->section }}</td>
                    <td>
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
