<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\UserController as ApiUserController;
use App\Http\Controllers\Api\PortfolioController;
use App\Http\Controllers\Api\ContractController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('forget_password', [AuthenticationController::class, 'forget_password'])->name('forget_password');
Route::middleware('auth:api')->group(function () {
    Route::get('authenticate', function(){
        $user = auth()->user();
        return response()->json(['status' => 'success', 'message' => 'Protected User', 'user' => $user]);
    })->name('authenticate');
    Route::get('user', [ApiUserController::class, 'userdetail'])->name('user');
    Route::post('client_details', [ClientController::class, 'addclientinfo'])->name('client_details');
    Route::get('products', [ProductController::class, 'productdetails'])->name('products');
    Route::get('our_services', [ServiceController::class, 'services'])->name('our_services');
    Route::get('portfolio', [PortfolioController::class, 'portfolios'])->name('portfolio');
    Route::post('generate_contract', [ContractController::class, 'generate_contract'])->name('generate_contract');
    Route::get('staff_generated_contracts', [ContractController::class, 'staff_generated_contracts'])->name('staff_generated_contracts');
});
