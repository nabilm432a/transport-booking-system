<x-layout>

    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Add/Change Contact</span></h1>
    </div>
    <div style="display: flex; justify-content: center; margin-top: 50px">
        <div style="background-color: white; width: 80%; padding: 20px; border-radius: 8px">
            <form action="{{ route('contact') }}" class="max-w-md mx-auto" method="POST">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="contact" id="contact" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="contact" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter your Phone Number</label>
                </div>

                <div style="margin-top: 10px; margin-right: 10px">
                    <button type="submit"
                            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-2 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                        <span>
                            Submit
                        </span>
                    </button>
                </div>
            </form>
            <div class="max-w-md mx-auto">
                <div style="margin-top: 10px; margin-right: 10px">
                    <a href="{{ route('profile') }}"><button
                            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-2 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                            <span>
                                Go Back
                            </span>
                        </button></a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
