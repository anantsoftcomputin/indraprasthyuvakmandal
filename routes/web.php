<?php

use App\Http\Controllers\EnquiryController;
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

// Route::get('/', function (\App\Services\GoogleSheet $googleSheet) {
//     $values = [
//         [3, 'John', 'JSAlbum', '2020-08-14', 4],
//         [4, 'Robert', 'Website', '2020-08-13', 5],
//     ];

//     $savedData = $googleSheet->saveDataToSheet($values);
//     dump($savedData);

//     dd($googleSheet->readGoogleSheet());
//     return view('welcome');
// });

// inquiry
Route::get('/',[EnquiryController::class,'index'])->name('Enq.index');
Route::post('/store',[EnquiryController::class,'store'])->name('Enq.Store');
// feedback
Route::get('/feedback',[EnquiryController::class,'feedback'])->name('Feedback.index');
Route::post('/storeFeedback',[EnquiryController::class,'storeFeedback'])->name('Feedback.Store');
