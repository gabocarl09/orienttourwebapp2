<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <title>ORIENTTOUR </title>

    @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/css/login.css', 'resources/css/style.css', 'resources/js/main.js', 'resources/js/app.js', 'js/bootstrap.bundle.min.js', 'js/bootstrap.bundle.min.js'])
</head>
<body>
    <!-- loader -->
    @include('components.loader')

    <!-- menu -->
    @include('includes/panel/menu')

    <!-- navbar -->
    @include('includes/panel/nav')

    
    @yield('content')
</body>
</html>
