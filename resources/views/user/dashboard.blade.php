<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }
        h1 {
            color: black;
        }
        .container {
            background-color: #bbbbbb;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        form {
            margin: 20px 0;
        }
        button {
            background-color: #0038f0;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 8px;
        }
        button:hover {
            background-color: #2e30a9;
        }
        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>

<body>

    <h1>Welcome to User Dashboard</h1>

    @extends('layouts.app')

    @section('content')

        <h1>Student Dashboard</h1>
            <form id="timeInForm" method="POST" action="{{ route('user.timein') }}">
                @csrf
                <button id="timeInBtn" type="submit" onclick="disableButton('timeInBtn')">Time In</button>
            </form>

            <form id="timeOutForm" method="POST" action="{{ route('user.timeout') }}">
                @csrf
                <button id="timeOutBtn" type="submit" onclick="disableButton('timeOutBtn')">Time Out</button>
            </form>


            <form method="POST" action="{{ route('user.logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endsection
</body>
</html>
