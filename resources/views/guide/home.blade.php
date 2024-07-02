<x-layout>
    <div style="margin-left: 30px; margin-top: 20px">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-blue-300">Travel Guide</span></h1>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center;">
        <div style="display: flex;">
            <a href="#"><div style="border-radius: 8px; padding: 100px; margin: 10px; background-image: url('{{asset("images/green-park.jpg")}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <h2 class="text-4xl font-extrabold dark:text-white">Frequently Visited</h2>
                <div style="background-color: white; border-radius: 8px; text-align: center">
                    <p>Check out where other people are travelling</p>
                </div>
            </div></a>
            <a href="#"><div style="border-radius: 8px; padding: 100px; margin: 10px; background-image: url('{{asset("images/river.jpg")}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <h2 class="text-4xl font-extrabold dark:text-white">Recommendations</h2>
                    <div style="background-color: white; border-radius: 8px; text-align: center">
                        <p>Want some travel recommendations?</p>
                    </div>
                </div></a>
        </div>
        <div style="display: flex;">
            <a href="#"><div style="border-radius: 8px; padding: 115px;margin: 10px; background-image: url('{{asset("images/discount.jpg")}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div style="opacity: 0">
                        <h2 class="text-4xl font-extrabold dark:text-white">Active Discounts</h2>
                        <div style="background-color: white; border-radius: 8px; text-align: center">
                            <p>Make use of Active discounts!</p>
                        </div>
                    </div>
                </div></a>

        </div>
    </div>
</x-layout>
