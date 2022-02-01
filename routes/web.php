<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Models\Media;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/property/{id}', [PropertyController::class, 'single'])->name('single-property');
    Route::get('/location/{id}', [LocationController::class, 'single'])->name('single-location');
    Route::get('/properties/', [PropertyController::class, 'index'])->name('properties');
    Route::get('/page/{slug}',[PageController::class,'single'])->name('page');
    Route::post('/property-inquiry{id}',[ContactController::class,'propertyInquiry'])->name('property-inquiry');
    Route::get('/currency/{code}',[HomeController::class,'currencyChange'])->name('currency-change');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-index');
    Route::get('/dashboard/properties', [DashboardController::class, 'properties'])->name('dashboard-properties');
    Route::get('/dashboard/add-property', [DashboardController::class, 'addProperty'])->name('add-property');
    Route::post('/dashboard/create-property', [DashboardController::class, 'createProperty'])->name('create-property');
    Route::post('/dashboard/update-property/{id}', [DashboardController::class, 'updateProperty'])->name('update-property');
    Route::post('/dashboard/delete-property/{id}', [DashboardController::class, 'deleteProperty'])->name('delete-property');
    Route::get('/dashboard/edit-property/{id}', [DashboardController::class, 'editProperty'])->name('edit-property');
    Route::post('/dashboard/delete-media/{media_id}', [DashboardController::class, 'deleteMedia'])->name('delete-media');

    Route::get('/dashboard/locations', [DashboardController::class, 'locations'])->name('dashboard-locations');
    Route::get('/dashboard/add-location', [DashboardController::class, 'addLocation'])->name('add-location');
    Route::post('/dashboard/create-location', [DashboardController::class, 'createLocation'])->name('create-location');
    Route::post('/dashboard/update-location/{id}', [DashboardController::class, 'updateLocation'])->name('update-location');
    Route::post('/dashboard/delete-location/{id}', [DashboardController::class, 'deleteLocation'])->name('delete-location');
    Route::get('/dashboard/edit-location/{id}', [DashboardController::class, 'editLocation'])->name('edit-location');

    Route::resource('dashboard-page', PageController::class);
});



//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
