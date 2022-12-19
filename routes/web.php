<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Jobs\SendEmailJob;
use App\Mail\SendEmail;

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
    return "ok";
});

Route::get('product-test', [ProductController::class, 'index']);
Route::get('send-email', function(){
    // $details = [
    //     'title' => 'Mail from Sujan',
    //     'body' => 'This is for testing email using smtp'
    // ];
    // Mail::to('asfd@gmail.com')->send( new SendEmail($details ));
    // dd("Email is Sent.");
    SendEmailJob::dispatch()
                    ->delay(now()->addSeconds(20));

    
    return 'Email sent Successfully';
});