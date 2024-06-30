<x-layout>
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Profile</span></h1>
    </div>

    <div>
        <div class="bg-indigo-500 w-2/4" style="margin-right: 20px; padding:20px; margin-left: 30px; margin-top: 20px; border-radius: 8px">
            <h1>User Information</h1>
            <br>
            <p>Name: {{auth()->user()->name}}</p>
            @if(auth()->user()->passport == null)
                <p>Passport: Not Entered</p>
            @else
                <p>Passport: {{auth()->user()->passport}}</p>
            @endif
            @if(auth()->user()->contact == null)
                <p>Contact: Not Entered</p>
            @else
                <p>Contact: {{auth()->user()->contact}}</p>
            @endif
        </div>

        <div class="bg-indigo-500 w-2/4" style="margin-right: 20px; padding:20px; margin-left: 30px; margin-top: 20px; border-radius: 8px">
            <h1>Update Information</h1>
            <div style="display: flex">
                <div style="margin-top: 10px; margin-right: 10px">
                    <a href="{{ route('passport') }}"><button
                            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-2 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                        @if(!auth()->user()->passport == null)
                            <span>
                                Update Passport
                            </span>
                        @else
                            <span>
                                Add Passport
                            </span>
                        @endif
                    </button></a>
                </div>

                <div style="margin-top: 10px; margin-right: 10px">
                    <a href="{{ route('contact') }}"><button
                            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-2 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                            @if(!auth()->user()->passport == null)
                                <span>
                                Update Contact
                                </span>
                            @else
                                <span>
                                Add Contact
                                </span>
                            @endif
                        </button></a>
                </div>
            </div>
        </div>

        <div class="bg-indigo-500 w-2/4" style="margin-right: 20px; padding:20px; margin-left: 30px; margin-top: 20px; border-radius: 8px">
            <h1>Have any feedbacks?</h1>

            <div>
                <div style="margin-top: 10px; margin-right: 10px">
                    <a href="{{ route('passport') }}"><button
                            class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-2 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                            <span>
                                Send Feedback
                            </span>

                        </button></a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
