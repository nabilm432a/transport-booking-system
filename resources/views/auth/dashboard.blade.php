<x-layout>
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Dashboard</span></h1>
    </div>
    <div style="display: flex;">
        <div class="bg-indigo-500 fixed-height" style="margin-right: 20px; padding:20px; margin-left: 30px; margin-top: 20px; border-radius: 8px; overflow-y: auto; height: 400px">
            <h1 class="text-2xl text-bold">Notice Board</h1>
        @foreach($notices as $notice)
            <a href="{{ route('notices.show', $notice) }}"><div class="transition duration-300 ease-in-out hover:bg-blue-300" style="border: black 2px solid ;border-radius: 8px; width: 100%; padding: 5px; margin-top: 10px">
                <h2 class="text-2xl" style="text-align: center">{{$notice->heading}}</h2>
                <br>
                <p style="text-align: center; margin-left: 5px; margin-bottom: 10px">{{ Str::words($notice->body, 10, '...') }}</p>
            </div></a>
        @endforeach
        </div>
        @if (!auth()->user()->is_admin)
        <div class="bg-indigo-500 fixed-width fixed-height" style="border-radius: 8px; margin-right: 20px; margin-top: 20px; padding:20px; width: 1000px; height: 400px; overflow-y: auto;">
            <h1 class="text-2xl text-bold">Upcoming Travels</h1>
            <div class="transition duration-300 ease-in-out hover:bg-blue-300" style="border: #2d3748 2px solid; border-radius: 8px; padding: 10px; width: 80%; margin-top: 10px;">
                <h1 class="font-bold" style="font-size: 20px;">Template: Location A to B</h1>
                <h2>Departure Time</h2>
                <h3>Details</h3>
            </div>
        </div>
        @endif
    </div>
</x-layout>
