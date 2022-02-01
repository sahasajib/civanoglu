<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

//use phpDocumentor\Reflection\DocBlock\Tags\Property;

class HomeController extends Controller
{
    public function  home(){
        $latest_properties = Property::latest()->get()->take(4);
        $locations = Location::select('id','name')->get();
        //dd($latest_properties);
        return view('welcome',[
           'latest_properties'=> $latest_properties,
            'locations'=> $locations
        ]);
    }
    public function currencyChange($code){
        Cookie::queue('currency',$code,3600);
        return back();
    }
}
