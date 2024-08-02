<x-layout>
    <section style="margin-left: 50px; margin-top: 50px;">
        @if (auth()->user())
        <div style="display: flex; justify-content: center">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-purple-500 from-sky-400">Welcome </span><a id="name-anchor" href="{{ route('profile') }}">{{auth()->user()->name}}</a></h1>
        </div>
        @else
            <div style="display: flex; justify-content: center">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-purple-500 from-sky-400">Welcome </span></h1>
            </div>
        @endif
        @if (auth()->user() && !auth()->user()->is_admin || !auth()->user())

        <div style="margin-top: 50px; display: flex; justify-content: center">
            <a href="{{ route('book') }}" style="width: 50%"><button
            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                <span>
                    Book A Ticket
                </span>
            </button></a>
        </div>
        @endif

        @if (auth()->user() && !auth()->user()->is_admin || !auth()->user())
        <div style="margin-top: 75px; display: flex; justify-content: center">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-purple-500 from-sky-400">Have a look around</span> </h1>
        </div>
        @endif

        <div style="margin-top: 20px; display: flex; justify-content: center">
            <div style="margin-right: 20px">
                <a href="{{ route('guide') }}"><button
                class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span>
                        Travel Guide
                    </span>
                </button></a>
            </div>

            <div style="margin-right: 20px">
            <a href="{{ route('availability') }}"><button
            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                <span>
                    Check Transports
                </span>
            </button></a>
            </div>
            @guest()
            <div style="margin-right: 20px">
                <a href="{{route('login')}}"><button
                class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span>
                        Login
                    </span>
                </button></a>
            </div>

            <div>
                <a href="{{route('register')}}"><button
                class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span>
                        Register
                    </span>
                </button></a>
            </div>
            @endguest

            @if (auth()->user() && auth()->user()->is_admin)
                <div>
                    <a href="{{ route('admin_panel') }}"><button
                            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                        <span>
                            Admin Panel
                        </span>
                    </button></a>
                </div>
            @endif
        </div>
    </section>
</x-layout>
