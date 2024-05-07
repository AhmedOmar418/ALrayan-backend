<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//---------------------------------  Start Site Routes  ---------------------------------
Route::get('/site', 'SiteController@index');
//---------------------------------  End Site Routes  ---------------------------------



//---------------------------------  Start Dashboard Routes  ---------------------------------
Route::group(['prefix'=>'dashboard'],function (){
    Route::post('/login', [\App\Http\Controllers\Dashboard\Auth\LoginController::class, 'login']);

    //make group of routes should be protected
    Route::group(['middleware' => 'auth:sanctum'],function (){
        Route::post('/add-enroll', [\App\Http\Controllers\Dashboard\Enrolls\EnrollsController::class, 'store']);
        Route::get('/enrolls', [\App\Http\Controllers\Dashboard\Enrolls\EnrollsController::class, 'index']);
    });
});

//---------------------------------  End Dashboard Routes  ---------------------------------
