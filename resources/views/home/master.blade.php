<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUP - Calauan Branch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="{{ asset('home/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/classroommanagement.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/display.css') }}">

</head>

<body>
    <div class="pup">
        <img src="{{ asset('img/pup.jpg') }}" alt="Classroom Management" style="width: 100%; height: 100%; " />
    </div>

    @include('home.layouts.header')

    @yield('content')

</body>

</html>
