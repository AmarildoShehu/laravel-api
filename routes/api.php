<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Api\ProjectController;

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


// importazione rotte singole
// Route::resource('projects', ProjectController::class);
// Route::prefix('projects')->controller()
// Route::get('/projects',[ProjectController::class, 'index']);
// Route::get('/projects/{project}',[ProjectController::class, 'show']);
// Route::post('/projects',[ProjectController::class, 'store']);
// Route::delete('/projects/{project}',[ProjectController::class, 'destroy']);
// Route::put('/projects/{project}',[ProjectController::class, 'update']);

// Glodale
Route::apiResource('projects', ProjectController::class)->only('index', 'show');
Route::get('projects/{slug}', [ProjectController::class, 'show']);