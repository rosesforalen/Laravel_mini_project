
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitator Login</title>
</head>
<style>
 body {
            font-family: Arial, sans-serif;
            background-color: hsl(0, 0%, 100%);
            margin: 0;
            padding: 0;

        }

        h1 {
            text-align:Center;
            margin-top:150px;
        }

        .form {
            background-color: #e3bc9a;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-right:100px;
            margin-left:380px;
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
        .form{

        }

    </style>
<body>
    <h1>Facilitator Login</h1>

    @if($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="form">
    <form method="POST" action="{{ route('facilitator.login') }}">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Login</button>
    </form>
    </div>
</body>
</html>
