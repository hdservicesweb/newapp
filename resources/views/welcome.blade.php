<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main_style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
            <button class="navbar-toggler ml-auto navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar01" aria-controls="navbar01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar01">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'VYS') }}
                </a>
             
                <div class="container-fluid">
                    <form class="form-inline  float-right  my-1">
                        <div class="input-group input-group-sm mr-0">
                            <input class="form-control mr-sm-0 form-control-sm" type="search" placeholder="Search" aria-describedby="inputGroup-sizing-sm" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success btn-sm " type="submit">&nbsp;<i class="fa fa-search"></i>&nbsp;</button>
                            </div>
                        </div>
                    </form>
                    @if (Route::has('login'))
                    <div class="float-right my-1">
                        @auth
                        <a href="{{ route('login') }}" class="text-white btn btn-sm btn-outline-success ml-4 mr-4">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-white btn btn-sm btn-outline-success ml-4 ">Login</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-sm btn-success mr-4"><b>Register</b></a>
                        @endif
                        @endauth

                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>