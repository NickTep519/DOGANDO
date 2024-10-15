<?php

use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home') ;

Route::prefix('/dashboard')->middleware(['auth', 'verified'])->name('dashboard.')->group(function() {
    Route::get('/', [DashboardController::class, 'user'] )->name('user') ; 
    Route::get('/voyage', [DashboardController::class, 'voyage'])->name('voyage') ; 
    Route::get('expeditions/', [DashboardController::class, 'expedition'])->name('expedition') ; 
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile') ; 

} ) ;  


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit') ;
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update') ;
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy') ;
});

Route::prefix('conversations')->middleware('auth')->name('conversation.')->group( function(){
    Route::get('/', [ConversationController::class, 'index'] )->name('index') ; 
    Route::get('/{user}', [ConversationController::class, 'show'])->name('show') ; 
    Route::post('/{user}',[ConversationController::class, 'store'] ) ; 
}) ;

Route::resource('posts', PostController::class)->except(['index', 'show']) ; 

Route::prefix('posts')->name('annonces.')->group(function(){
    Route::get('/annonces-voyageurs', [AnnoncesController::class, 'voyage'])->name('voyage') ; 
    Route::get('/annonces-expediteurs', [AnnoncesController::class, 'expedition'])->name('expedition') ; 
}) ; 

Route::get('posts/annonces/{slug}-{post}', [AnnoncesController::class, 'show'])->name('posts.show')->where([
    'slug' => '[a-z0-9\-]+',
    'post' => '[0-9]+'
]) ; 

require __DIR__.'/auth.php';