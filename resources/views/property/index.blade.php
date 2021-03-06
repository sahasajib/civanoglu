<x-guest-layout>
{{-- Breadcrumb --}}
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white mt-28">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800" href="{{route('home')}}">Property</a>></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li>Properties</li>
            </ul>
        </div>
    </div>
    <!--Titles & share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
                    <h2 class="text-3xl text-gray-600">Properties
                       @if(request('type')== '0')
                           - Land
                        @elseif(request('type')== '1')
                           - Apartment
                        @elseif(request('type')== '2')
                           - Villa
                        @endif
                    </h2>
        </div>
    </div>
{{--    content--}}
   <div class="container py-10 mx-auto">
       <div class="flex justify-between">
{{--           left side--}}
           <div class="w-9/12">
               <div class="flex flex-wrap -mx-6 mt-10">
               @foreach($latest_properties as $property)
                   @include('components.single-property-card',['property'=>$property])
               @endforeach
               </div>
               {{$latest_properties->links()}}
           </div>
{{--           left end--}}
{{--           right side--}}
           <div class="w-3/12 ml-6 vartical-search-form">
               @include('components.property-search-form');
           </div>

   </div>

</x-guest-layout>
