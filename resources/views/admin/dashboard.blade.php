<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<style>
body {
            font-family: Arial, sans-serif;
            background-color: #52baf1   ;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            color: #333;
        }
        h1{
            text-align:center;
            border: 2px solid #d1c7bd;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px 0;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #000000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            justify-content: center;
        }

        .btn-primary {
            background-color:  #000000;

        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn:hover {
            opacity: 0.9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;

        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f8f9fa;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .col-md-6 {
            width: 48%;
        }
        .logout-button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            float:right;
            }

            .logout-button:hover {
            background-color: #c82333;
            }



</style>
<body>
    <h1>Welcome to Admin Dashboard</h1>
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="logout-button">Logout</button>

    </form>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="{{ route('admin.add.student') }}" class="btn btn-primary d-flex justify-content-around">Add Student</a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('admin.add.facilitator') }}" class="btn btn-primary d-flex justify-content-around">Add Facilitator</a>
        </div>
    </div>

    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>Admin Dashboard</h1>

            <h2>Students</h2>
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
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->year }}</td>
                            <td>{{ $student->course }}</td>
                            <td>{{ $student->section }}</td>
                            <td>
                                <a href="{{ route('admin.edit.student', ['id' => $student->id]) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.delete.student', ['id' => $student->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h2>Facilitators</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facilitators as $facilitator)
                        <tr>
                            <td>{{ $facilitator->name }}</td>
                            <td>{{ $facilitator->username }}</td>
                            <td>
                                <a href="{{ route('admin.edit.facilitator', ['id' => $facilitator->id]) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.delete.facilitator', ['id' => $facilitator->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

    <h2>Student's Attendance</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Course</th>
                        <th>Section</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->year }}</td>
                            <td>{{ $student->course }}</td>
                            <td>{{ $student->section }}</td>
                            <td>{{ $student->time_in }}</td>
                            <td>{{ $student->time_out }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

</body>
</html>
