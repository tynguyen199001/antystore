<?php
use App\Http\Controllers\CategoriesController;
use App\Models\Categories;
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
    return view('admin.home');
});

Route::resource('categories', CategoriesController::class);
Route::prefix('/categories')->group(function () {
    Route::get('/active/{id}', [CategoryController::class, 'active'])->name('categories.active');
    Route::get('/unactive/{id}', [CategoryController::class, 'unactive'])->name('categories.unactive');
});
 Route::resource('brands', BrandController::class);
 Route::resource('products', ProductController::class);
 Route::resource('users', UserController::class);
 Route::resource('roles', RoleController::class);