<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #d8a272;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 95vh;
        }

        h1 {

        }

        form {
            background-color: #e3bc9a;
            padding-top:50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 450px;

        }
        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>Student Login</h1>
    <form method="POST" action="{{ route('user.login.submit') }}">
        @csrf
        <div>
            <label>Username:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
@endsection

</body>
</html>
