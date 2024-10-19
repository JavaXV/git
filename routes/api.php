<?php

use App\Http\Controllers\AdminPermissionsController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\AccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichs
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//-------------------BST Consulting Text  API------------------------
Route::get('findingAlls/bst', [InterestController::class, 'findingAll']);
Route::post('insertValues/bst', [InterestController::class, 'insertValue']);

//------------staff GetUserById------------------------------------------------------
Route::get('users/{id}', [InterestController::class, 'show']);
//------------staff GetUserByFirstname------------------------------------------------------
Route::post('users/firstname', [InterestController::class, 'findByFirstname']);






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



