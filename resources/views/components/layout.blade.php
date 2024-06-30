@vite('resources/css/app.css')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transport</title>
    <script>
        function showAlert() {
            alert('Contact Page does not yet Exist');
        }
    </script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal" style="background-image: url('{{asset("images/3160611.jpg")}}')">
    <nav class="navbar ">
        <div class="navbar-container">
            <a href="{{route('home')}}" class="navbar-logo hover:text-black transition-all duration-300 ease-in-out">Travels</a>
            <ul class="navbar-menu">

                <li><a href="{{route('home')}}">Home</a></li>
                @guest()
                    @if(!isset($hideAuthLinks) || !$hideAuthLinks)
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endif
                @endguest
                @if (auth()->user())
                    @if (!auth()->user()->is_admin)
                    <li><a href="{{ route('dashboard') }}">{{auth()->user()->name}}</a></li>
                    @endif
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endif
                @if (auth()->user() && !auth()->user()->is_admin)
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                @endif
                @if (auth()->user() && auth()->user()->is_admin)
                    <li><a href="{{ route('admin_panel') }}">Admin Panel</a></li>
                @endif
                @if (auth()->user() && !auth()->user()->is_admin || !auth()->user())
                <li><a href="#" onclick="showAlert()">Contact</a></li>
                @endif
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
