<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

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

Route::view('/', 'welcome');
Route::resource('computers', 'App\Http\Controllers\ComputerController');

Route::get('computers/create', [ComputerController::class,'create'])->name('computer-create');

Route::get('computers/edit', 'ComputerController@uptdate')->name('computer-edit');

/*Route::get('/index',function(){
    return view('computadores.index');

} )->name('index');
*/

/*Route::get('/form', function () {
    return view('computadores.create');
})->name('form');
*/

