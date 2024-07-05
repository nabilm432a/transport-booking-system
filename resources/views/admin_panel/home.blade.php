<x-layout>
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Admin Panel</span></h1>
    </div>

    <div>
        <div style="display: flex; flex-direction: column; width: 100%; align-items: center">
            <div style="margin-right: 20px; margin-left: 20px; width: 70%">
                <a href="{{ route('transports.index') }}"><button
                        class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span>
                        Vehicle Management
                    </span>
                    </button></a>
            </div>

            <div style="margin-right: 20px; margin-left: 20px; width: 70%">
                <a href="#"><button
                        class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span>
                        Route Management
                    </span>
                    </button></a>
            </div>

            <div style="margin-right: 20px; margin-left: 20px; width: 70%">
                <a href="#"><button
                        class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span>
                        Notice Board
                    </span>
                    </button></a>
            </div>
        </div>
    </div>
</x-layout>
