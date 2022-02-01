<div class="fixed top-0 w-full py-4 px-12 flex  justify-between items-center z-30 sticky-header {{request()->routeIs('home') ?
     '' : 'general-header'}}">
  <div class="min-w-max">
      <a href="{{route('home')}}"><img width="150" src="/img/logo.png" alt="logo"></a>
  </div>
    <div class="w-full">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=0">{{__('Land')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=2">{{__('Vila')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=1">{{__('Apartment')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page','about-us')}}">{{__('About us')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page','contact-us')}}">{{__('Contact us')}}</a></li>
        </ul>
    </div>
    <div class="min-w-max mr-10 text-2xl">
        <a href="{{route('currency-change','usd')}}" class="inline-block mr-5 text-white">$</a>
        <a href="{{route('currency-change','tl')}}" class="inline-block mr-5 text-white">₺</a>
    </div>
    <div class="min-w-max text-3xl">
        <a href="{{LaravelLocalization::getLocalizedURL('tr')}}">🇹🇷</a>
        <a href="{{LaravelLocalization::getLocalizedURL('en')}}">🇺🇸</a>
    </div>
</div>
