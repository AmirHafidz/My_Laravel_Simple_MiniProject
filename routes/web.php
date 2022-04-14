<?php
// namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('test');
// });

// Route::post('/login',[UserController::class,'login']);


Route::get('/logout',function (){
    Session::forget('user');
    return redirect('/');
});

Route::get('/login',function (){
    return view('home');
});



Route::get('/editmyuser',function(){
    return view('edituser');
});

Route::get('/editmyuser',[UserController::class,'getuser']);

// get = limited
// post  = panjang dan boleh attach
Route::post('/login',[UserController::class,'login']);

Route::post('/useredit',[UserController::class,'edituser']);
//route::method('action,function()')

// Route::get('/userget',function(){
//     return view('edituser');
// });

Route::get('/register',function(){
    return view('register');
});

Route::post('/register',[UserController::class,'register']);

Route::get('/userlist',function(){
    return view('viewuser');
});

Route::get('/userlist',[UserController::class,'listuser']);

Route::get('/userdelete',[UserController::class,'deleteuser']);

Route::post('/userlist',[UserController::class,'search']);

Route::post('/viewuser',[UserController::class,'search']);

Route::get('/signin',function(){
    return view('signin');
});

Route::get('/masuk',function (){
    return view('masuk');
});

Route::get('/logg',function(){
    return view('logininterface');
});

Route::get('/try',function(){
    return view('try');
});

Route::get('/gg',function(){
    return view('logininterface');
});

Route::get('/invi',function(){
    if(Session::has('user')){
        return ('it have user');
    }
    else{
        return("it deosnt have");
    }
});

Route::get('newtry',function(){
    return view('homes');
});