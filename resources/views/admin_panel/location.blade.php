<x-layout>
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span
                class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Locations</span></h1>
    </div>

    <div>
        <div style="display: flex; flex-direction: column; align-items: center">

            <a href="{{route('locations.create')}}" style="width: 50%">
                <button
                    class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span>
                        ADD
                    </span>
                </button>
            </a>

            <a href="{{route('routes.index')}}" style="width: 50%">
                <button
                    class="mt-5 tracking-wide font-semibold bg-blue-400 text-black w-full rounded-lg hover:bg-blue-400 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span>
                        BACK
                    </span>
                </button>
            </a>
        </div>

        <div>
            @if(session('message'))
                <p class="text-red-600">{{session('message')}}</p>
            @endif
        </div>

        <div
            style="display: flex; justify-content: center; align-items: center; padding-bottom: .5rem; margin-top: 10px">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3" style="text-align: center;">ID</th>
                    <th scope="col" class="px-6 py-3" style="text-align: center;">Station</th>
                    <th scope="col" class="px-6 py-3" style="text-align: center;">City</th>
                    <th scope="col" class="px-6 py-3" style="text-align: center;">Region</th>
                    <th scope="col" class="px-6 py-3" style="text-align: center;">Country</th>
                    <th scope="col" class="px-6 py-3" style="text-align: center;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($locations as $location)
                    <tr class="bg-gray-100">
                        <td style="text-align: center;">{{$location->id}}</td>
                        <td style="text-align: center;">{{$location->station}}</td>
                        <td style="text-align: center;">{{$location->city}}</td>
                        <td style="text-align: center;">{{$location->region}}</td>
                        <td style="text-align: center;">{{$location->country}}</td>
                        <td style="display: flex; align-items: center; justify-content: center; gap: 10px;">
                            <form
                                action="{{route('locations.edit', $location)}}">
                                @csrf
                                @method('GET')
                                <button style="color: white; background-color: #9ca3af;" type="submit">Edit</button>
                            </form>

                            <form
                                method="POST" action="{{route('locations.destroy', $location)}}">
                                @csrf
                                @method('DELETE')
                                <button style="color: white; background-color: #9ca3af;" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-layout>
