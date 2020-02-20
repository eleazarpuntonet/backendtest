<?php

use Illuminate\Http\Request;
use App\Stores;
use App\Cars;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::resource('users', 'usersController');
Route::post('users/delete', 'usersController@massdelete')->name('users.massdelete');

Route::resource('stores', 'storeController');
Route::post('stores/delete', 'storeController@massdelete')->name('stores.massdelete');

Route::get('/test', function (Request $request) {
    return Cars::with(['tiendas_disponibles'])->get();
    // return Stores::with(['autos_inventario'])->get();
});