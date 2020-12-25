<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home', [HomeController::class, 'iindex'])->name('home.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/products', [ProductController::class, 'index'])->name('products.index'); //菜單
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show'); //菜單個別資訊
Route::post('/products',[ProductController::class, 'store'])->middleware('auth')->name('products.store');//加入購物車



