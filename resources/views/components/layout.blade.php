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
            <a href="{{route('home')}}" class="navbar-logo hover:text-black transition-all duration-300 ease-in-out">Travels</a>

            <ul class="navbar-menu">
{{--                <li><a href="#" id="toggle-sidebar">Sidebar</a></li>--}}
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

            </ul>
            <div class="navbar-toggle">
                <span class="navbar-toggle-bar"></span>
                <span class="navbar-toggle-bar"></span>
                <span class="navbar-toggle-bar"></span>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        @include('partials.sidebar')

        <div class="content">
            {{ $slot }}
        </div>

    </div>
    <script>
        // document.getElementById('toggle-sidebar').addEventListener('click', function(event) {
        //     event.stopPropagation();
        //     document.querySelector('.sidebar').classList.toggle('active');
        // });

        const sidebar = document.querySelector('.sidebar');


        document.addEventListener('mousemove', function(event) {

            const mouseX = event.clientX;

            if (mouseX <= 20) {
                sidebar.classList.add('active'); // Show sidebar
            } else {
                if (mouseX >= 250) {
                    sidebar.classList.remove('active'); // Hide sidebar
                }
            }
        });
    </script>
</body>
</html>
