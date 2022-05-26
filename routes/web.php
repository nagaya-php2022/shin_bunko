<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookController;
use App\Http\controllers\RentalController;
use App\Http\controllers\BookDetailController;

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
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
    return view('home');
 });
    Route::get('/', function () {
    return view('home');
});
/*Route::post('auth/confirm', function($request){
    $hash = array(
        'name' => $requrst->name,
        'password' => $request->password,
    );
    return view('auth.confirm')->with($hash);
});*/
/*Route::get('members/search',function () {
    return view('welcome');
})->name('members.search');*/
   Route::get('members/search', [MemberController::class, 'search'])->name('members.search');
   Route::get('staff/search', [StaffController::class, 'search'])->name('staff.search');

   Route::get('member-data/{id}', [MemberController::class, "memberInfo"]);
   Route::get('book-data/{id}', [BookController::class, "rentableBookData"]);

   Route::get('books/search', [BookController::class, 'search'])->name('books.search');
   Route::get('rentals/search', [RentalController::class, 'search'])->name('rentals.search');

   Route::resource('members', MemberController::class);
   Route::resource('staff', StaffController::class);


   Route::get("rental-data/{book_id}", [RentalController::class, 'returnableBookData']);
   Route::post("rentals/return", [RentalController::class, 'returnBooks'])->name("rentals.return");

   Route::get("rentals/edit", [RentalController::class, 'edit'])->name('rentals.edit');
   Route::resource('rentals', RentalController::class);
   Route::resource('books', BookController::class);
   Route::resource('book_details',BookDetailController::class);


});