<x-guest-layout>
    <div class="relative z-10 pt-52 pb-64 bg-cover bg-center" style="background-image: url(/img/hero-bg.jpg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-center text-white text-2xl">
            <h2 class="font-bold text-5xl mb-5">Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit. Deserunt, reprehenderit.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, excepturi.</p>
        </div>
    </div>

{{--    search from area--}}
    <div class="-mt-20 md:-mt-10">
        <div class="container">
            <div class="rounded-lg bg-white p-4 relative z-20 shadow-lg home-search">
                 @include('components.property-search-form', ['locations'=>$locations]);
            </div>
        </div>
    </div>

    <div class="py-32 text-center">
        <div class="container">
            <h2 class="section-heading">Lorem ipsum dolor sit amet <br> adipisicing elit. Aliquam, consectetur. <span class="underline">Et officia</span></h2>
            <p class="text-gray-500 text-2xl font-bold mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, quia?</p>
            <a  class="inline-block text-2xl rounded-2xl border-2 border-gray-700 px-8 py-3" href="">Start The Searching</a>
            <h2 class="section-heading pt-14">Lorem ipsum dolor sit amet <br> adipisicing elit. Aliquam, consectetur. </h2>

            <div class="md:w-4/5 mx-auto">
                <div class="flex -mx-3 flex-wrap justify-between mt-10">
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-sm text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, natus</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-sm text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, natus</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-sm text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, natus</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-sm text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, natus</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-sm text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, natus</p>
                    </div>
                    <div class="w-full md:w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-sm text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, natus</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container text-center pt-14">
        <h2 class="section-heading">More information about us</h2>
        <div class="relative mt-10 mb-14 bg-cover rounded-xl py-24 bg-center"
        style="background-image: url('/img/hero-bg.jpg')">
            <div class="absolute w-full h-full rounded-xl opacity-50 bg-black left-0 top-0"></div>
            <div class="relative z-20">
                <a data-lity href="https://youtu.be/cyp7d-jEvNA" class="text-white text-xl flex flex-col justify-center items-center"><span class="border-2 border-white w-12 h-12 text-center
                 pt-1 pl-1 leading-7 text-2xl hover:border-yellow-500 duration-200 rounded full mb-2"><i data-feather="play"></i></span> Watch the video</a>
            </div>
        </div>
        <div class="text-xl">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aspernatur atque cum cumque
                dignissimos dolor dolore eaque earum facere, hic ipsa iste, iusto minima molestias, neque nisi
                officiis quasi quia quibusdam quis recusandae reprehenderit sunt tempora tempore vero voluptates.
                ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aspernatur atque cum cumque
                dignissimos dolor dolore eaque earum facere, hic ipsa iste, iusto minima molestias, neque nisi
                officiis quasi quia quibusdam quis recusandae reprehenderit sunt tempora tempore vero voluptates.</p>
        </div>
    </div>
    <div class="container pt-14">
        <div class="md:flex md:justify-between">
            <div class="flex-1 md:mr-10 text-lg leading-normal">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aspernatur atque cum cumque
                    dignissimos dolor dolore eaque earum facere, hic ipsa iste, iusto minima molestias, neque nisi
                    officiis quasi quia quibusdam quis recusandae reprehenderit sunt tempora tempore vero voluptates.
                    ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aspernatur atque cum cumque
                    dignissimos dolor dolore eaque earum facere, hic ipsa iste, iusto minima molestias, neque nisi
                    officiis quasi quia quibusdam quis recusandae reprehenderit sunt tempora tempore vero voluptates. Accusamus ad aspernatur atque cum cumque
                    dignissimos dolor dolore eaque earum facere, hic ipsa iste, iusto minima molestias, neque nisi
                    officiis quasi quia quibusdam quis recusandae reprehenderit sunt tempora tempore vero voluptates.</p>
            </div>
            <div class="flex-1 md:ml-10 mt-10 md:mt-0">
                <img class="rounded" src="/img/hero-bg.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container pt-14">
        <div class="flex justify-center items-center">
            <a href="" class="btn"> Start searching with filters</a>
             <p class="mx-10">or</p>
            <a href="" class="btn-outline">Start searching on the map</a>
        </div>
    </div>
{{--    last added objects--}}
    <div class="container pt-14">
        <h2 class="section-heading">last added objects</h2>
        <div class="flex flex-wrap -mx-6 mt-10">

            @foreach($latest_properties as $property)
                @include('components.single-property-card',['property'=>$property])
            @endforeach

{{--            <div class="md:w-3/12  mt-10 mx-4">--}}
{{--                <a href="" class="px-3 relative rounded-md mb-6 block">--}}
{{--                    <div class="shadow-lg">--}}
{{--                        <div class="py-20 bg-center" style="background-image: url('/img/hero-bg.jpg')"></div>--}}
{{--                        <div class="p-3">--}}
{{--                            <h2 class="leading-0 text-base ">Lorem ipsum dolor sit amet dolor sit amet.</h2>--}}
{{--                            <h3 class="text-2xl py-3">AED 490,000</h3>--}}
{{--                            <div class="border-t-2">--}}
{{--                                <ul class="flex items-center -mx-1 my-4">--}}
{{--                                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">7 Bedrooms</li>--}}
{{--                                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">3 Bathrooms</li>--}}
{{--                                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">1500 M<sup>2</sup></li>--}}
{{--                                </ul>--}}
{{--                                <span class="btn w-full text-center">More details</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="w-full md:w-3/12 mt-10 mx-4">--}}
{{--                <a href="" class="px-3 relative rounded-md mb-6 block">--}}
{{--                    <div class="shadow-lg">--}}
{{--                        <div class="py-20 bg-center" style="background-image: url('/img/hero-bg.jpg')"></div>--}}
{{--                        <div class="p-3">--}}
{{--                            <h2 class="leading-0 text-base ">Lorem ipsum dolor sit amet dolor sit amet.</h2>--}}
{{--                            <h3 class="text-2xl py-3">AED 490,000</h3>--}}
{{--                            <div class="border-t-2">--}}
{{--                                <ul class="flex items-center -mx-1 my-4">--}}
{{--                                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">Bedrooms</li>--}}
{{--                                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">Bathrooms</li>--}}
{{--                                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">M <sup>2</sup></li>--}}
{{--                                </ul>--}}
{{--                                <span class="btn w-full text-center">More details</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
</x-guest-layout>
