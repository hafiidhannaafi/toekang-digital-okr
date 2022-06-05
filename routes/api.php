<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BundleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[BundleController::class,'index']);
Route::post('/store',[BundleController::class,'store']);
Route::put('/update/{bundleID}',[BundleController::class,'update']);
Route::delete('/destroy/{bundleID}',[BundleController::class,'destroy']);
Route::post('/store/product/{bundleID}',[BundleController::class,'storeProduct']);
Route::get('/show/product/{bundleID}',[BundleController::class,'showProductByBundle']);
Route::get('/show/product/',[BundleController::class,'showProductAll']);
Route::put('/update/product/{productID}',[BundleController::class,'updateProduct']);
Route::delete('/destroy/product/{productID}',[BundleController::class,'destroyProduct']);
Route::post('/store/task/{productID}',[BundleController::class,'storeTask']);
Route::get('/show/task/{productID}',[BundleController::class,'showTaskByProduct']);
Route::get('/show/task/',[BundleController::class,'showTaskAll']);
Route::put('/update/task/{taskID}',[BundleController::class,'updateTask']);
Route::delete('/destroy/task/{taskID}',[BundleController::class,'destroyTask']);
Route::post('/store/subtask/{taskID}',[BundleController::class,'storeSubtask']);
Route::get('/show/subtask/{taskID}',[BundleController::class,'showSubtaskByTask']);
Route::get('/show/subtask/',[BundleController::class,'showSubtaskAll']);
Route::put('/update/subtask/{subtaskID}',[BundleController::class,'updateSubtask']);
Route::delete('/destroy/subtask/{subtaskID}',[BundleController::class,'destroySubtask']);


