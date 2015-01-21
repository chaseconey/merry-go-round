<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Merry Go Round</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>

@include('layouts.partials.nav')


<div class="container-fluid">
    @include('flash::message')
    @include('layouts.partials.errors')

    @yield('content')
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>
