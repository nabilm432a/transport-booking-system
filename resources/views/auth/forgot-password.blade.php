<x-layout :hideAuthLinks="true">
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1" style="height: 100%">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12" >
                <div class="mt-12 flex flex-col items-center">
                    <h1 class="text-2xl xl:text-3xl font-extrabold">
                        Reset Password
                    </h1>
                    <div class="w-full flex-1 mt-8">

                        <div class="mx-auto max-w-xs">
                            <form action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <input
                                    id="email"
                                    name="email"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="email" placeholder="Email" required/>
                                <button
                                    type="submit"
                                    class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <span class="ml-3">
                                    Submit
                                </span>
                                </button>
                            </form>
                            @if(session('status'))
                                <p class="text-red-600">{{ session('status') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
