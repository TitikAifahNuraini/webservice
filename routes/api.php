<?php

use App\Http\Controllers\MobileApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/mobile/login', [MobileApiController::class, 'login']);
Route::get('/mobile/ceklogin', [MobileApiController::class, 'ceklogin']);
Route::post('/mobile/register', [MobileApiController::class, 'register']);
Route::post('/mobile/logout', [MobileApiController::class, 'logout']);
Route::get('/mobile/modul', [MobileApiController::class, 'modul']);
Route::post('/mobile/tugas', [MobileApiController::class, 'tugas']);
