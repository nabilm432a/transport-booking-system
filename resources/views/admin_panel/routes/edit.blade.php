<x-layout>
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Routes</span></h1>
    </div>

    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <div class="mt-12 flex flex-col items-center">
                    <h1 class="text-2xl xl:text-3xl font-extrabold">
                        Update Information
                    </h1>
                    <div class="w-full flex-1 mt-8">

                        <div class="mx-auto max-w-xs">
                            <form action="{{route('routes.update', $route)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input
                                    id="price"
                                    name="price"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="number" min="0" placeholder="Price" required/>

                                <input
                                    id="departure_time"
                                    name="departure_time"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="datetime-local" min="0" placeholder="Time" required/>

                                <input
                                    id="arrival_time"
                                    name="arrival_time"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="datetime-local" min="0" placeholder="Time" required/>

                                <button
                                    type="submit"
                                    class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <span>
                                    Submit
                                    </span>
                                </button>
                            </form>
                            <a href="{{ route('routes.index') }}"><button
                                    class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <span>
                                    Go back
                                    </span>
                                </button></a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
