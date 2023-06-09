<?php

use App\Enum\RoleEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
Route::get('/exams',[ExamController::class, 'index']);
Route::group(['middleware' => ['jwt.verify']], function() {
    // Route::get('user', 'UserController@getAuthenticatedUser');
    // Route::get('closed', 'DataController@closed');
Route::get('/exam/{id}',[ExamController::class, 'show']);
Route::post('/exams',[ExamController::class, 'store'])->middleware(['auth', 'role:' . RoleEnum::SUPER_ADMIN]);
Route::post('/exam/{id}',[ExamController::class, 'update'])->middleware(['auth', 'role:' . RoleEnum::SUPER_ADMIN]);
Route::post('/examdelete/{id}',[ExamController::class, 'destroy'])->middleware(['auth', 'role:' . RoleEnum::SUPER_ADMIN]);

});

