<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrdersController;

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
    return view('home');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [OrdersController::class, 'show'])->name('dashboard');

Route::post('order', [OrdersController::class, 'order']);

Route::middleware(['auth:sanctum', 'verified'])->get('getOrder', [OrdersController::class, 'show'])->name('getOrder');

// Route::post('order_successfull', function () {
//     // Update the user's profile...

//     return redirect('/')->with('status', 'Order submitted.');
// })->name('order_successfull');