<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;

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

// Visitor Routes
Route::get('/get-visitor', [VisitorController::class, 'getVisitor']);

// Contact Routes
Route::post('/post-contact', [ContactController::class, 'postContact']);

// Site Info Controller
Route::get('/get-site-info', [SiteInfoController::class, 'getSiteInfo']);

// Category Controller
Route::get('get-category', [CategoryController::class, 'getCategory']);
