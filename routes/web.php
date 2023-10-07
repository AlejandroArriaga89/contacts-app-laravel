<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', fn () => Response::view('contact'));

Route::post('/contact', function (Request $request) {
    return Response::json(["message" => "hola"])->setStatusCode(400);
});

Route::get('/change-password', fn () => Response::view('change-password'));

Route::post('/change-password', function (Request $request) {
    if (auth()->check()) {
        return response("Password changed to {$request->get('password')}");
    }
    return response("Not Authenticated", 401);
});
