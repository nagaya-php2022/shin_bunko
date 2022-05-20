<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookController;
use App\Http\controllers\RentalController;

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
/*Route::post('auth/confirm', function($request){
    $hash = array(
        'name' => $requrst->name,
        'password' => $request->password,
    );
    return view('auth.confirm')->with($hash);
});*/
Route::resource('members', MemberController::class);
Route::resource('staff', StaffController::class);
Route::resource('rentals', RentalController::class);
Route::resource('books', BookController::class);