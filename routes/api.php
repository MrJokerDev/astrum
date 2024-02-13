<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\CrmFormController;
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
Route::get('/send_get', [CrmFormController::class, 'sendGet'])->name('send.get');
Route::post('/send_post', [CrmFormController::class, 'sendPost'])->name('send.notify');
Route::post('/create', [CrmFormController::class, 'createUser'])->name('create.user');
