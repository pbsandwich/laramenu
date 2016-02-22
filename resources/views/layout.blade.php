{{-- This layout uses bootstrap for formatting, and then passes the contents --}}
{{-- in the body of each page. --}}
{{-- I used the variable $content to retrieve the data on all views. --}}
{{-- I used an anchor tag and href to point to the appropriate link. --}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    @yield('content')
</body>
</html>