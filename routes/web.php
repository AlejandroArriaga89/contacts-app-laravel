<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', fn () => auth()->check() ? redirect('home') : view('welcome'));

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->resource('contacts', ContactController::class);

Route::get('/checkout', function (Request $request) {
    return $request->user()
        ->newSubscription('default', config('stripe.price_id'))
        ->checkout();
});

Route::get('/billing-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal();
});
