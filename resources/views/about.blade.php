<x-layout>

    <div style="margin-left: 30px; display: flex; align-items: center; justify-content: center">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-green-300 from-purple-400">About Us</span></h1>
    </div>
    <div style="display: flex; align-items: center; justify-content: center">
        <img src="{{asset("images/bracu_logo.webp")}}" style="width: 220px; height: 200px;">
    </div>
    <div style="display: flex; margin-left: 30px; margin-top: 20px; align-items: center; justify-content: center">
        <div class="border-b-2 border-r-2 border-green-200 hover:text-white" style="margin: 20px; background-color: #48bb78; border-radius: 8px; padding: 20px; transition: color 0.3s ease">
            <p>Name: Ashraf Mahir</p>
            <p>ID: </p>
        </div>
        <div class="border-b-2 border-r-2 border-green-200 hover:text-white" style="margin: 20px; background-color: #48bb78; border-radius: 8px; padding: 20px; transition: color 0.3s ease">
            <p>Name: Mitul Roy Tanny</p>
            <p>ID: </p>
        </div>
        <div class="border-b-2 border-r-2 border-green-200 hover:text-white" style="margin: 20px; background-color: #48bb78; border-radius: 8px; padding: 20px; transition: color 0.3s ease">
            <p>Name: Nabil Hossain Chowdhury</p>
            <p>ID: 21241006</p>
        </div>
        <div class="border-b-2 border-r-2 border-green-200 hover:text-white" style="margin: 20px; background-color: #48bb78; border-radius: 8px; padding: 20px; transition: color 0.3s ease">
            <p>Name: Rukaya Zaman</p>
            <p>ID: </p>
        </div>
    </div>

    <div style="display: flex; margin-left: 30px; margin-top: 20px; align-items: center; justify-content: center">
        <a href="{{ url()->previous() }}" style="width: 70%"><button
            class="mt-5 tracking-wide font-semibold text-black w-full py-4 rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
            <span class="ml-3">
                Go Back
            </span>
        </button></a>
    </div>
</x-layout>
