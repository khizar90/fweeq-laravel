<?php

use App\Http\Controllers\Admin\AdminController;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
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
    return view('pages.index');
})->name('home');





Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/transaction', function () {
    return view('pages.transaction');
})->middleware(['auth'])->name('transaction');

Route::get('/setting', function () {
    return view('pages.setting');
})->middleware(['auth'])->name('setting');


Route::prefix('admin')->middleware(['auth:admin'])->name('admin-')->group(function () { 
    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    // Route::get('/user/delete/{id}', [AdminController::class, 'deleteUser'])->name('user-delete');
    // Route::get('feedback', [AdminController::class, 'feedback'])->name('feedback');
    // Route::get('feedback/delete/{id}', [AdminController::class, 'feedbackDelete'])->name('feedback-delete');

    
    // Route::get('enable/comment', [AdminController::class, 'enableCommenShow'])->name('enable-comment');
    // Route::post('enable/comment', [AdminController::class, 'enableCommenCreate']);
    


});



require __DIR__.'/auth.php';
require __DIR__ . '/adminauth.php';


// Route::get('/insert', function () {
//     $user = new Admin();
//     $user->name = 'Kevin Anderson';
//     $user->email = 'admin@admin.com';
//     $user->password = Hash::make('qweqwe');
//     $user->save();
// });