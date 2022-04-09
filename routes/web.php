<?php

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\FetchDataController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddFarmerController;
use App\Models\add_farmer;

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
Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/checkin',[LoginController::class,'checkIn'])->name('admin.checkin');

//Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){




// Route::get('/farmer-list', function () {
//     return view('farmer-list');
// });

//Route::any('/farmer-list',function(){
   // dd(session()->all());
    //return view('farmer-list');
//});

Route::get('/home', function () {
    return view('home');
});


Route::get('/add-farmer', function () {
    return view('add-farmer');
});


Route::get('/emplogin',function () {
    return view('auth.emplogin');
});

Route::get('/employee',function () {
    return view('employee');
});


Route::post('/add-farmer',[AddFarmerController::class,'addData'])->name('add_farmer.store');

Route::get('/farmer-list',[FetchDataController::class,'index'])->name('farmers');

Route::get('delete-records',[DeleteController::class,'index']);

Route::get('delete/{id_no}',[DeleteController::class,'destroy'])->name('delete.farmer');

Route::post('login-user',[LoginController::class,'login'])->name('login-user');

