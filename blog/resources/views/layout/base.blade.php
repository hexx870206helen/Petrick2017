<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title') | Paradise
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/base.css">
    @yield('stylesheets')
</head>

<body>
    @include('layouts.header')
    @section('page-content')
    <div class="container">
        <div class="col-md-3 sidebar">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9 content">
            <div class="col-md-12 product">
                @yield('product-name')
            </div>
            <div class="col-md-12">
                @yield('breadcrumbs')
            </div>
            <div class="col-md-12 content-div">
                @yield('content')
            </div>
            <div class="col-md-12 last-updated">
                @yield('last-updated')
                <div class="pull-right last-cc">
                    <a href="https://creativecommons.org/licenses/by/4.0/">
                    <img alt="Creative Commons Attribution 4.0 International (CC BY 4.0)"
                    src="/image/CC-attribution.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @include('layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('javascript')
</body>

</html>