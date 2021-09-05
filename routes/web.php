<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

=======
use App\Http\Controllers\AuthController;
<<<<<<< HEAD
=======

>>>>>>> 46bcdab (migration)
>>>>>>> 1efe191 (migration)
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
<<<<<<< HEAD
=======

Route::get('/me', function (){
    return redirect('/');
});

<<<<<<< HEAD
Route::get('/me',[AuthController::class, 'me']);
=======
Route::get('/me',[AuthController::class, 'me']);
>>>>>>> 46bcdab (migration)
>>>>>>> 1efe191 (migration)
