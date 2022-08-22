<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Events\ChatMessageEvent;


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

Route::get('/', [\App\Http\Livewire\HomeComponent::class, "render"]);
Route::get('/shop', [\App\Http\Livewire\ShopComponent::class, "render"]);
Route::get('/cart', [\App\Http\Livewire\CartComponent::class, "render"]);
Route::get('/checkout', [\App\Http\Livewire\CheckoutComponent::class, "render"]);

Route::get('/playground', function () {

    event(new ChatMessageEvent(""));

    return null;
});

Route::get('/ws', function () {
    return view('websocket');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/chat-message', function(Request $request) {
    event(new ChatMessageEvent($request->message));
    return null;
});
