<?php

use App\Http\Controllers\ApplyFormController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('visitors.index');
// })->name('index');

Route::get('/',[IndexController::class, 'index'])->name('index');

Route::view('about','visitors.aboutus')->name('about');
Route::view('constrution','visitors.construtioncard')->name('constrution');
Route::view('healthsafety','visitors.healthsafety')->name('healthsafety');
Route::view('elearning','visitors.elearning')->name('elearning');
Route::view('business','visitors.business')->name('business');
Route::view('healthsocial','visitors.healthsocial')->name('healthsocial');
Route::view('citb-test','visitors.citb-test')->name('citb-test');
Route::view('cpcs-card','visitors.cpcs-card')->name('cpcs-card');
Route::view('nvq-training','visitors.nvq-training')->name('nvq-training');
Route::view('applyform','visitors.applyform')->name('applyform');
Route::view('faq','visitors.faq')->name('faq');
Route::view('privacy','visitors.privacy')->name('privacy');
Route::view('term','visitors.term')->name('term');
Route::view('return','visitors.return')->name('return');
Route::view('thanks','visitors.thanku')->name('thanku');

Route::get('blog/{id}',[IndexController::class,'blog'])->name('blog');

Route::post('enquiry',[EnquiryController::class,'store'])->name('enquiry');

Route::post('apply-form',[ApplyFormController::class,'store'])->name('form');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
