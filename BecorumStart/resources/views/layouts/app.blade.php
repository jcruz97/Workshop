<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('extra-js')
    <title>@yield('title')</title>
</head>
 <body class="bg-dark d-flex  flex-column">
    <div class="d-flex justify-content-between">
        <h2 class="pl-5 ml-5 pt-4"><a href="{{ route('topics.index') }}" class="text-light font-weight-bold text-decoration-none">BecoRum</a></h2>
        
            @auth
            {{-- IF AUTH SHOW NOTIFICATIONS & MENU AUTH --}}
                
                {{-- AUTH MENU --}}
                    <nav class="nav nav-pills nav-fill justify-content-end pr-5 mr-3 pt-4">
                        
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle btn btn-info" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}</a>
                                <div class="dropdown-menu">
                                    <a href="{{ route('topics.index') }}" class="dropdown-item">Home</a>
                                    <a href="{{ route('topics.create')}}" class="dropdown-item">Creer un topic</a>
                                    <a href="{{ url('/logout') }}"  class="dropdown-item">Logout</a>
                                    <a href="{{ route('profile.show') }}" class="dropdown-item">Profil</a>
                                </div>
                            </li>
                        
                    </nav>
            @endauth
            @guest
            {{-- GUEST MENU  --}}
            <nav class="nav nav-pills nav-fill justify-content-end pr-5 mr-3 pt-4">
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-info" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Guest</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('topics.index') }}" class="dropdown-item">Home</a>
                        <a href="{{ route('login') }}" class="dropdown-item">login</a>
                        <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                    </div>
                    </li>
                </ul> 
            </nav>     
            @endguest
        
    </div>



        
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
