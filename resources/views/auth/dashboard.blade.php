<x-layout>
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Dashboard</span></h1>
    </div>
    <div style="display: flex;">
        <div class="bg-indigo-500" style="margin-right: 20px; padding:20px; margin-left: 30px; margin-top: 20px; border-radius: 8px">
            <h1 class="text-white" style="text-align: center">Notice Board</h1>
        @foreach($notices as $notice)
            <a href="{{ route('notices.show', $notice) }}"><div class="opacity-100 transition duration-300 ease-in-out hover:opacity-50" style="background-color: #a0aec0; border-radius: 8px; width: 100%">
                <h2 style="text-align: center">{{$notice->heading}}</h2>
                <br>
                <p style="text-align: center; margin-left: 5px; margin-bottom: 10px">{{ Str::words($notice->body, 10, '...') }}</p>
            </div></a>
        @endforeach
        </div>
        @if (!auth()->user()->is_admin)
        <div class="bg-indigo-500" style="border-radius: 8px; margin-right: 20px; margin-top: 20px; padding:20px; ">
            <h1>Upcoming Travels</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aliquid aspernatur blanditiis consequatur dolores, et harum itaque laborum magnam numquam placeat quaerat quis repellendus repudiandae rerum sequi veritatis voluptatibus.</p>
        </div>
        @endif
    </div>
</x-layout>
