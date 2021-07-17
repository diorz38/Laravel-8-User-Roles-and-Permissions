<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/test', function () {
    return \App\Models\Menu::with('subMenu')->where('parent_id', null)->get();
});
Route::get('/json', function () {

    // Read File
    $jsonString = file_get_contents(storage_path('json/codes.json'));
    $data = json_decode($jsonString, true);

    // Update Key
    $data['country.title'] = "Change Manage Country";

    // Write File
    $newJsonString = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents(storage_path('json/codes.json'), stripslashes($newJsonString));

    // Get Key Value

    // dd(__('country.title'));
    return $data['menu'];

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pages/{link}', [App\Http\Controllers\MenusController::class, 'index'])->name('menu');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::impersonate();
});


