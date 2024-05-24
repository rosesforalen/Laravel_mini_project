<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include any CSS or JavaScript files here -->
</head>
<body>
    <!-- Navigation bar or header can be included here -->

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer or additional scripts can be included here -->
</body>
</html>
