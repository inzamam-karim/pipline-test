<?php

use App\Events\OrderShipped;
use App\Events\StatusLiked;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    event(new StatusLiked('shaila sharmin'));
    return "Event has been sent!";
});

Route::get('order', function () {
    event(new OrderShipped('Inzamamul Karim','Your order successfully placed'));
    return "Order event has been sent!";
});