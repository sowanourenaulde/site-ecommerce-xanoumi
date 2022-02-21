<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentController;

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

Route::get('/',[GuestController::class,'index'])->name('accueil');

Route::get('/toutesnoscategories',[GuestController::class,'listcategories'])->name('allcategories');

Route::get('/categories/{categorie}', [GuestController::class,'category'])->name('categorie');

Route::get('/produits/{product}',[GuestController::class,'infoProduct'])->name('produit');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['admin:admin'])->group(function(){


    Route::get('/admin',[DashboardController::class,'index'])->name('admin-panel');

    Route::resource('/categorie',CategorieController::class); 

    Route::resource('/products',ProductController::class);

    Route::get('/utilisateurs',[UserController::class,'index'])->name('users');

    Route::get('/locations',[RentController::class,'index'])->name('allrent');
    
});