<! DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/css/stickly-footer.css" media="screen">
</head>

<body>
@include('layouts.partials.header')

<div class="container">
    <div class="row" id="content">
        <div class="col-md-3">
            @include('layouts.partials.sidebar')
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>