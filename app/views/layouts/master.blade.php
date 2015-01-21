<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Merry Go Round</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>

@include('layouts.partials.nav')


<div class="container-fluid">
    @include('flash::message')
    @include('layouts.partials.errors')

    @yield('content')
</div>

@include('calls.partials.modal-quick-create')

<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>
