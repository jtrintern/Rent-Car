<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['role:Admin', 'auth', 'verified'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [TransactionController::class , 'dashboard'])->name('dashboard');
    
    Route::get('/car', [CarController::class , 'index'])->name('indexCar');
    Route::get('/addcar', [CarController::class , 'create'])->name('addCar');
    Route::post('/storecar', [CarController::class , 'store'])->name('storeCar');
    Route::get('/deleteCar/{car}', [CarController::class , 'destroy'])->name('deleteCar');
    Route::get('/editcar/{car}', [CarController::class , 'edit'])->name('editCar');
    Route::post('/updatecar/{car}', [CarController::class , 'update'])->name('updateCar');

    Route::get('/adminlist', [UserController::class , 'indexAdmin'])->name('indexAdmin');
    Route::get('/addadmin', [UserController::class , 'createAdmin'])->name('addAdmin');
    Route::post('/storeadmin', [UserController::class , 'storeAdmin'])->name('storeAdmin');
    Route::get('/deleteadmin/{user}', [UserController::class , 'destroy'])->name('deleteAdmin');


    Route::get('/category', [CategoryController::class , 'index'])->name('indexCategory');
    Route::post('/storeCategory', [CategoryController::class , 'store'])->name('storeCategory');
    Route::get('/deleteCategory/{category}', [CategoryController::class , 'destroy'])->name('deleteCategory');
    Route::post('/editCategory/{category}', [CategoryController::class , 'update'])->name('editCategory');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',function(){
    return view('rentcarr.index');
})->name('home');
Route::get('/listkendaraan',[rentCarController::class, 'PageListkendaraan'])->name('listkendaraan');
Route::get('/detailkendaraan',[rentCarController::class, 'PageDetailkendaraan'])->name('detailkendaraan');
Route::get('/pesan',[rentCarController::class, 'PagePesan'])->name('pesanrental');
Route::get('/invoice',[rentCarController::class, 'PageInvoice'])->name('invoice');
Route::get('/loginregister',[rentCarController::class, 'PageLoginRegister'])->name('loginregister');


require __DIR__ . '/auth.php';
