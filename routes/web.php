<?php

// use App\Http\Controllers\ActivityController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\ChallengeController;
// use App\Http\Controllers\CompanyController;
// use App\Http\Controllers\CountryController;
// use App\Http\Controllers\EnquiryController;
// use App\Http\Controllers\OrderController;
// use App\Http\Controllers\PermissionController;
// use App\Http\Controllers\RoleController;
// use App\Http\Controllers\TodoController;
// use App\Http\Controllers\UserController;
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
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('activities', ActivityController::class);
Route::resource('categories', CategoryController::class);
Route::resource('challenges', ChallengeController::class);
Route::resource('companies', CompanyController::class);
Route::resource('countries', CountryController::class);
Route::resource('enquiries', EnquiryController::class);
Route::resource('orders', OrderController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('roles', RoleController::class);
Route::resource('to-dos', TodoController::class);
Route::resource('users', UserController::class);


Route::get('trashed-company','CompanyController@trashed')->name('trashed_company.trashed');
// Route::get('trashed-company/{company}','CompanyController@show_trashed')->name('trashed_company.show_trashed');
// Route::put('restore-company/{company}','CompanyController@restore')->name('restored_company');