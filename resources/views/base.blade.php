<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <title>@yield('title')</title>
        <meta name="author" content="Department of Management Studies, NIT Trichy">
        <meta name="description" content="Two-day employability Skill Enhancement Programme">
        <meta name="keywords" content="Skill Enhacement Programme,SEP,2015,NITT,DoMS,Department of Management Studies">
        <style>
            body{
                background-image: url("{{asset('images/brushed_alu.png')}}");
            }
            .container-fluid
            {
                width:80%;
                margin-left:10%;
            }
        </style>
    </head>
    <body>
        <!-- blue-grey lighten-5 -->
        <div class="container-fluid">
            <nav>
                <div class="nav-wrapper blue white-text">
                    <a href="#" data-activates="mobile-nav" class="waves-effect button-collapse right" style="padding:0 10px"><i class=" mdi-navigation-menu"></i></a>
                    <a href="/" class="brand-logo " style="padding:0 10px">SEP - 2015</a>
                    <ul class="nav-mobile right hide-on-med-and-down">
                       @yield('nav-bar')
                    </ul>
                    <ul class="side-nav" id="mobile-nav">
                        @yield('side-nav')
                    </ul>
                </div>
            </nav>
        @yield('content')
        </div>
        <div class="container-fluid">
            <footer class="blue page-footer">
                <div class="footer-copyright">
                    <div class="container">
                        &copy; 2015-2016 SEP 
                        <a class="grey-text text-lighten-4 right" href="http://delta.nitt.edu" target="_blank">Delta Force</a>
                    </div>
                </div>
        </footer>
        </div>
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
        <script>
            $(document).ready(function(){
            $(".button-collapse").sideNav();
            });
        </script>
        </body>
</html>