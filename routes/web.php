<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotController;
use Telegram\Bot\Laravel\Facades\Telegram;

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

Route::get('/asd', function(){
    return view('welcome');
});
Route::get('/', [BotController::class, 'store']);
Route::get('/update', [BotController::class, 'getUpdate']);
// Route::post('s/1881085314:AAECD4Ke8UZpHAeEzqcMB6YnFV-gRP8i2YI/webhook', function () {
    
//     // Laravel - Setup a POST route.
//     $response = Telegram::setWebhook(['url' => 'http://testbot.test/1881085314:AAECD4Ke8UZpHAeEzqcMB6YnFV-gRP8i2YI/webhook']);
//     return $response;
// })->name('ok');
