
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NoteBook App</title>
    <link rel="stylesheet" href="/dist/css/main.css">
    <link rel="stylesheet" href="/dist/css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="/notebooks">NoteBook App</a>
            </div>
            <!-- Left Side Of Navbar 
            <ul class="navbar-nav mr-auto">

            </ul>-->
               <!-- Right Side Of Navbar -->
               <ul class="dropdown">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else

                

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="username"  aria-haspopup="true" v-pre  >
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    
                    
                @endguest
            </ul>
            
        </nav>
        <!-- /navbar -->
        <!-- Main component for call to action -->
        <div class="container">@include('inc.messages')</div>
        @yield('content')
    </div>
    <!-- /container -->

    <script src="/dist/js/jquery3.min.js"></script>
    <script src="/dist/js/bootstrap.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script >
        CKEDITOR.replace('article-ckeditor');
      </script>
</body>

</html>
