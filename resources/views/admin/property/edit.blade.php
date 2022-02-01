<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Property') }}
            </h2>
            <div class="min-w-max">
                <a class="btn" href="{{route('dashboard-properties')}}">Back</a>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6">
                    <h3>Gallery Image</h3>
                    <div class="flex mt-3">
                        @foreach($property->gallery as $gallery)
                            <div style="min-width: 100px" class=" mr-4 relative">
                                <div class="flex items-center justify-between h-full">
                                    <img style="max-width: 100px" src="/uploads/{{$gallery->name}}" alt="">
                                </div>
                                <form method="post" action="{{route('delete-media',$gallery->id)}}" onsubmit="return confirm('Do you really want to delete the image?')" class="absolute top-0 right-0">
                                    @csrf
                                    <button class="text-white bg-red-500 px-3 py-1" style="font-size:8px ">Delete</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>


                <form action="{{route('update-property',$property->id)}}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data">@csrf
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="name" class="form-label">Title<span class="required-text">*</span></label>
                            <input class="form-inputs" type="text" id="name" name="name" value="{{$property->name}}" required>

                            @error('name')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="name_tr" class="form-label">Title-Turkish<span class="required-text">*</span></label>
                            <input class="form-inputs" type="text" id="name_tr" name="name_tr" value="{{$property->name_tr}}" required>

                            @error('name_tr')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-6">
                            <label for="featured_image" class="form-label">featured image<span class="required-text">*</span></label>
                            <input class="form-inputs" type="file" id="featured_image" name="featured_image" >

                                <div class="mt-3">
                                    <img src="/uploads/{{$property->featured_image}}" alt="">
                                </div>

                            @error('featured_image')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="mb-6">
                        <label for="gallery_image" class="form-label">galleri image<span class="required-text">*</span></label>
                        <input class="form-inputs" type="file" id="gallery_image" name="gallery_image[]" multiple >

                        @error('gallery_image')
                        <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="location_id" class="form-label">Location<span class="required-text">*</span></label>
                            <select class="form-label" id="location_id" name="location_id" required>
                                <option value="">Select location</option>
                                @foreach($locations as $location)
                                    <option {{$property->location->id == $location->id ? 'selected="selected"':''}} value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select>

                            @error('location_id')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="price" class="form-label">price<span class="required-text">*</span></label>
                            <input class="form-inputs" type="number" id="price" name="price" value="{{$property->price}}" required>

                            @error('price')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label for="sale" class="form-label">for<span class="required-text">*</span></label>
                            <select class="form-label" id="sale" name="sale" required>
                                <option  value="">Select Type</option>
                                <option {{$property->sale == '0' ? 'selected="selected"' : ''}} value="0">Rent</option>
                                <option {{$property->sale == '1' ? 'selected="selected"' : ''}} value="1">Buy</option>
                            </select>

                            @error('sale')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label for="type" class="form-label">type<span class="required-text">*</span></label>
                            <select class="form-label" id="type" name="type" required>
                                <option value="">Select property type</option>
                                <option {{$property->type == '0' ? 'selected="selected"' : ''}} value="0">Villa</option>
                                <option {{$property->type == '1' ? 'selected="selected"' : ''}} value="1">Apartment</option>
                                <option {{$property->type == '2' ? 'selected="selected"' : ''}} value="2">Land</option>
                            </select>

                            @error('type')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="form-label" for="drawing_rooms">drawing rooms<span class="required-text">*</span></label>
                            <select class="form-inputs"  name="drawing_rooms" id="drawing_rooms">
                                <option value="">Drawing rooms</option>

                                @for($x = 0; $x <= 3; $x++)
                                    <option {{$property->drawing_rooms == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('drawing_rooms')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="bedrooms" class="form-label">bedrooms<span class="required-text">*</span></label>
                            <select class="form-label" id="bedrooms" name="bedrooms" required>
                                <option value="">Bedrooms</option>
                                @for($x = 0; $x <= 6; $x++)
                                    <option {{$property->bedrooms == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('bedrooms')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="bathrooms" class="form-label">bathrooms<span class="required-text">*</span></label>
                            <select class="form-label" id="bathrooms" name="bathrooms" required>
                                <option value="">Bathrooms</option>
                                @for($x = 0; $x <= 5; $x++)
                                    <option {{$property->bathrooms == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('bathrooms')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="form-label" for="kitchens">kitchens<span class="required-text">*</span></label>
                            <select class="form-inputs"  name="kitchens" id="kitchens">
                                <option value="">Kitchens</option>
                                @for($x = 0; $x <= 6; $x++)
                                    <option {{$property->kitchens == $x ? 'selected="selected"' : ''}} value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('kitchens')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="net_sqm" class="form-label">net square meter<span class="required-text">*</span></label>
                            <input class="form-inputs" type="number" id="net_sqm" name="net_sqm" value="{{$property->net_sqm}}" required>

                            @error('net_sqm')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label for="gross_sqm" class="form-label">gross square meter</label>
                            <input class="form-inputs" type="number" id="gross_sqm" name="gross_sqm" value="{{$property->gross_sqm}}" required>

                            @error('gross_sqm')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label for="pool" class="form-label">pool</label>
                            <select class="form-label" id="pool" name="pool" required>
                                <option value="">Select pool type</option>
                                <option {{$property->pool == '0' ? 'selected="selected"' : ''}} value="0">No</option>
                                <option {{$property->pool == '1' ? 'selected="selected"' : ''}} value="1">Private</option>
                                <option {{$property->pool == '2' ? 'selected="selected"' : ''}} value="2">Public</option>
                                <option {{$property->pool == '3' ? 'selected="selected"' : ''}} value="3">Both</option>
                            </select>

                            @error('type')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="overview" class="form-label">overview<span class="required-text">*</span></label>
                            <textarea class="form-input" id="overview" name="overview" required>{{$property->overview}}</textarea>

                            @error('overview')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="overview_tr" class="form-label">overview-Turkish<span class="required-text">*</span></label>
                            <textarea class="form-input" id="overview_tr" name="overview_tr" required>{{$property->overview_tr}}</textarea>

                            @error('overview_tr')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="why_buy" class="form-label">why buy<span class="required-text">*</span></label>
                            <textarea class="form-input" id="why_buy" name="why_buy" cols="30" rows="5" required>{{$property->why_buy}}</textarea>

                            @error('why_buy')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="why_buy_tr" class="form-label">why buy-Turkish<span class="required-text">*</span></label>
                            <textarea class="form-input" id="why_buy_tr" name="why_buy_tr" cols="30" rows="5" required>{{$property->why_buy_tr}}</textarea>

                            @error('why_buy_tr')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label for="description" class="form-label">description<span class="required-text">*</span></label>
                            <textarea class="form-input" id="description" name="description" cols="30" rows="10" required>{{$property->description}}</textarea>

                            @error('description')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label for="description_tr" class="form-label">description-Turkish<span class="required-text">*</span></label>
                            <textarea class="form-input" id="description_tr" name="description_tr" cols="30" rows="10" required>{{$property->description_tr}}</textarea>

                            @error('description_tr')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button class="btn" type="submit">Edit Property</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
