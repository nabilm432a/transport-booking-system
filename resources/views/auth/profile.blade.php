<x-layout>
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Profile</span></h1>
    </div>

    <div>
        <div class="bg-indigo-500 w-2/4" style="margin-right: 20px; padding:20px; margin-left: 30px; margin-top: 20px; border-radius: 8px">
            <h1>User</h1>
            <p>Name: {{auth()->user()->name}}</p>
        </div>

        <div class="bg-indigo-500 w-2/4" style="margin-right: 20px; padding:20px; margin-left: 30px; margin-top: 20px; border-radius: 8px">
            <h1>Update Information</h1>
            <p>{{auth()->user()->name}}</p>

            <div style="display: flex">
                <div style="margin-top: 10px; margin-right: 10px">
                    <a href="#"><button
                    class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-2 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                        <span>
                            Update Name
                        </span>
                    </button></a>
                </div>

                <div style="margin-top: 10px; margin-right: 10px">
                    <a href="#"><button
                            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-2 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                        <span>
                            Update Passport
                        </span>
                    </button></a>
                </div>

                <div style="margin-top: 10px">
                    <a href="#"><button
                            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-2 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                        <span>
                            Update Password
                        </span>
                    </button></a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
