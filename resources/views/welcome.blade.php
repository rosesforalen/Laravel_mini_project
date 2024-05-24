<!DOCTYPE html>
<html>
<head>
    <title>Role Selection</title>
    <style>
        body{
            background-color:#cbad8d;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {background-color: #3e8e41}

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        h1{
            text-align:center;
            font-size:60px;
            margin-top:100px;
        }

     div{
        margin-top:10px;
        margin-bottom: 30px;
        margin-left:370px ;
        margin-right:100px;
        font-size:80px;
       }
       .button{
        width:100px;
        height:50px;
        background-color:#b77957;
       }
        h1{
        border: 2px solid #fff1d7;
        border-radius:20px;
        margin-top: 100px;
        margin-bottom:100px;
       }
    </style>
</head>
<body>
    <h1>Select Your Role</h1>
    <div>
    <a href="{{ route('admin.login') }}" class="button">ADMIN</a>
    <a href="{{ route('facilitator.login') }}" class="button">FACILITATOR</a>
    <a href="{{ route('user.login') }}" class="button">USER</a>
    </div>
</body>
</html>
