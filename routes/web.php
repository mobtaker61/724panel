<?php


use App\Http\Controllers\Panel\PanelController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

Auth::routes();

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::get('/', function () {return view('welcome');})->name('home');

//Admin Panel
Route::prefix('Admin')->namespace('Admin')->middleware('auth')->group(function (){});

//User Panel
Route::prefix('Panel')->namespace('Panel')->middleware('auth')->group(function (){
    Route::get('/', [PanelController::class,'index'])->name('panel');

});
