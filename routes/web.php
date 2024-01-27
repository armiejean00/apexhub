<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeskController;

use App\Http\Controllers\UserController;


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
    return view('welcome');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/admin/admin-booking', function () {
    return view('admin-booking');
});

Route::get('/admin/admin-officemap', function () {
    return view('admin-officemap');
});
Route::get('/admin/manage-user', function () {
    return view('manage-user');
});
Route::get('/admin/manage-desk', function () {
    return view('manage-desk');
});

Route::get('/desks',[DeskController::class,'index'])->name('desks.index');
Route::get('/desks/create',[DeskController::class,'create'])->name('desks.create');

Route::post('/desks',[DeskController::class,'store'])->name('desks.store');
Route::post('/desks/{desks}/edit',[DeskController::class,'edit'])->name('desks.edit');
Route::put('/desks/{desks}/edit',[DeskController::class,'update'])->name('desks.update');
Route::delete('/desks/{desks}/destroy',[DeskController::class,'destroy'])->name('desks.destroy');


Route::get('/use',[UserController::class,'index1'])->name('use.index1');
Route::get('/use/create',[UserController::class,'create'])->name('use.create');
Route::post('/use',[UserController::class,'store'])->name('use.store');
Route::delete('/use/{use}/destroy',[UserController::class,'destroy'])->name('use.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('user/{id}',[UserController::class,'update']);



Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/home', function (\Illuminate\Http\Request $request) {
    $floor = $request->input('floor');
    $validFloors = ['floor1', 'floor2', 'floor3'];
    if (in_array($floor, $validFloors)) {
        return view('home', ['image' => $floor.'.png']);
    } else {
        return view('home', ['image' => null]);
    }
});


Route::post('/update-data', 'DataController@update')->name('updateData');
