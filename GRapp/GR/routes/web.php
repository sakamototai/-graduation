<?php
use App\Http\Controllers\accountController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login',[accountController::class,'login']);
Route::get('column/{id}',[accountController::class,'column1']);
Route::get('bridal_fair',[accountController::class,'bridalfair']);
Route::get('budget',[accountController::class,'budget']);
Route::get('chat',[accountController::class,'chat']);
Route::get('column',[accountController::class,'column']);
Route::get('home',[accountController::class,'home']);
// Route::get('inquiry',[accountController::class,'inquiry']);
Route::get('online_reserve',[accountController::class,'onlinereserve']);
Route::get('schedule',[accountController::class,'schedule']);
