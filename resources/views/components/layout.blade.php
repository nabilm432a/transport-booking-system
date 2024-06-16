@vite('resources/css/app.css')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transport</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal" style="background-image: url('{{asset("images/3160611.jpg")}}')">
    <nav class="navbar ">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">Transport Site</a>
            <ul class="navbar-menu">

                <li><a href="{{route('home')}}">Home</a></li>
                @guest()
                    @if(!isset($hideAuthLinks) || !$hideAuthLinks)
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endif
                @endguest
                @if (auth()->user())
                    <li><a href="#">{{auth()->user()->name}}</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endif
                @if (auth()->user() && !auth()->user()->is_admin)
                    <li><a href="#">Profile</a></li>
                @endif
                @if (auth()->user() && auth()->user()->is_admin)
                    <li><a href="#">Admin Panel</a></li>
                @endif
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="navbar-toggle">
                <span class="navbar-toggle-bar"></span>
                <span class="navbar-toggle-bar"></span>
                <span class="navbar-toggle-bar"></span>
            </div>
        </div>
    </nav>
    {{ $slot }}
</body>
</html>
