<x-layout>
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Notice</span></h1>
    </div>

    <div style="display: flex; justify-content: center; align-items: center; height: 80%;">
        <div class="text-white w-2/3 h-2/3" style="border-radius: 8px; padding: 1.5rem;background-color: white">
            <div style="margin-bottom: 10px; background-color: grey; border-radius: 8px; text-align: center">
                <h2 class="mb-2 ml-2 mt-0 text-2xl font-medium leading-tight text-primary">{{$notice->heading}}</h2>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: white">
                <p class="text-black">{{$notice->body}}</p>

            </div>
            </br></br></br></br></br></br></br></br>
            <div style="margin-right: 20px; margin-left: 20px;">
                <a href="{{ route('dashboard') }}"><button
                        class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                <span>
                    Back
                </span>
                    </button></a>
            </div>
        </div>
    </div>

</x-layout>
