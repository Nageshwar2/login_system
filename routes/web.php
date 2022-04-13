<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    if(!(checkLog())) {
        return redirect('/login');
    }
    return redirect('/dashboard');
});

Route::get('/register',function () {
    if(!(checkLog())) {
        return view('register');
    }
    return redirect('/dashboard');
});
Route::get('/login',function () {
    if(!(checkLog())) {
        return view('login');
    }
    return redirect('/dashboard');
});
Route::get('/loginv2',function () {
    if(!(checkLog())) {
        return view('loginv2');
    }
    return redirect('/dashboard');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login')->with('msg','You Have Logged Out');
});

Route::get('/dashboard',[UserController::class,'Dashboard']);

Route::post('/register',[UserController::class,'Register']);
Route::post('/login',[UserController::class,'Login']);
Route::post('/loginv2',[UserController::class,'LoginV2']);

function checkLog() {
    if(Session::has('user')) {
        return true;
    }
    return false;
}
