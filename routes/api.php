<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*Route::get('/posts', 'PostController@index');

// create route
Route::post('/posts', 'PostController@store');

// update
Route::put('/posts/{id}', 'PostController@update');

//delete
Route::delete('/posts/{id}', 'PostController@destroy');*/

Route::prefix('v1')->group(function(){
    Route::apiResource('posts', PostController::class);
});




/*Route::get('/testing-api',function() {
    return ['message' => 'Ola'];
});*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
