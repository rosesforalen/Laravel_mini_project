
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitator Dashboard</title>
</head>
<style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fefefe;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #a48374;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #02fa8f;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

</style>
<body>
    <h1>Welcome to Admin Dashboard</h1>
    <form method="POST" action="{{ route('facilitator.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

@extends('layouts.app')

@section('content')

    <h1>Attendance Table</h1>

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
            @foreach ($attendanceData as $student)
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

@endsection


</body>
</html>
