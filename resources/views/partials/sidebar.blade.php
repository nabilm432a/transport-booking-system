<div class="sidebar" style="background-color: #3869d4; display: flex; flex-direction: column; justify-content: space-between; height: 93vh; background-image: url('{{asset("images/peakpx.jpg")}}')">
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Travels</span></h1>
    </div>
    <div style="width: 90%; display: flex; flex-direction: column; align-items: center">
        <ul style="text-align: center; width: 80%">
            @if (Route::currentRouteName() == 'profile' || Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')
            <li><a href="#"><button
                class="mt-5 tracking-wide font-semibold bg-blue-300 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                <span class="ml-3">
                    Book a Ticket
                </span>
            </button></a></li>
            <li><a href="#"><button
                class="mt-5 tracking-wide font-semibold bg-blue-300 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                <span class="ml-3">
                    Travel Guide
                </span>
            </button></a></li>
            @endif
            @if (auth()->user() && auth()->user()->is_admin)
                <li><a href="#"><button
                    class="mt-5 tracking-wide font-semibold bg-blue-300 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span class="ml-3">
                        Notify User
                    </span>
                </button></a></li>

                <li><a href="#"><button
                    class="mt-5 tracking-wide font-semibold bg-blue-300 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span class="ml-3">
                        Manage Transports
                    </span>
                </button></a></li>

                <li><a href="#"><button
                    class="mt-5 tracking-wide font-semibold bg-blue-300 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span class="ml-3">
                        Manage Notices
                    </span>
                </button></a></li>
            @endif
        </ul>
    </div>
    <div style="margin-left: 30px; margin-bottom: 30px">
        <a class="hover:text-blue-500 transition" href="{{ route('about') }}" >About us</a>
    </div>
</div>
