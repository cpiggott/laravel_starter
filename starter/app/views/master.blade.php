<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Laravel 4.2 - Starter
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}

        <style>
            @section('styles')
                body {
                    padding-top: 60px;
                }
            @show
        </style>
       
        
    </head>

    <body>
        <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="">Laravel Starter</a>
                </div>
                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav">
                        <li><a href="{{{ URL::to('') }}}">Home</a></li>
                        @if ( Auth::guest() )
                            <li>{{ HTML::link('signin', 'Sign In') }}</li>
                            <li>{{ HTML::link('create', 'Create Account') }}</li>
                        @else
                            <li>{{ HTML::link('signout', 'Sign Out') }}</li>
                        @endif
                    </ul> 
                </div>

                
            </div>
        </div> 

        <!-- Container -->
        <div class="container">
            @if ($message = Session::get('success'))
                <div id="successMessage" class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Success</h4>
                    {{{ $message }}}
                </div>
            @endif

            <!-- Content -->
            @yield('content')

        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.2.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

    </body>
</html>