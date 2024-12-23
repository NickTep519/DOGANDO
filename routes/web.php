<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckboxController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ConversationController;

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

Route::prefix('/dashboard')->middleware(['auth','check.user.details', 'verified'])->name('dashboard.')->group(function() {
    Route::get('/', [DashboardController::class, 'user'] )->name('user') ; 
    Route::get('/offres', [DashboardController::class, 'voyage'])->name('voyage') ; 
    Route::get('/demandes', [DashboardController::class, 'expedition'])->name('expedition') ; 
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile') ; 
    Route::get('/posts/{post}/details', [DashboardController::class, 'details'])->name('posts.details') ; 
} ) ;  

Route::post('/checkbox/update', [CheckboxController::class, 'updateCheckboxStatus'])->name('checkbox.update');

Route::middleware('auth')->group(function () {
    Route::post('/tracking/update', [TrackingController::class, 'updatePosition']);
    Route::get('/tracking/{post_id}/latest', [TrackingController::class, 'getLatestPosition']);
});


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

Route::resource('blogs', BlogController::class) ; 

Route::get('/trajets', [AnnoncesController::class, 'trajets'])->name('trajets') ; 

Route::get('trajets/{slug}-{post}', [AnnoncesController::class, 'show'])->name('posts.show')->where([
    'slug' => '[a-z0-9\-]+',
    'post' => '[0-9]+'
]) ; 

Route::prefix('/posts')->name('offers.')->middleware('auth')->group(function() {
    Route::post('/{post}/offers', [OfferController::class, 'createOffer'])->name('create');
    Route::get('/{post}/offers', [OfferController::class, 'showOffersForPost'])->name('show');
    Route::post('/{offer}/status', [OfferController::class, 'updateOfferStatus'])->name('update.status');
    
} ) ; 

/*Route::prefix('')->name('annonces.')->group(function() {
    Route::get('/trajets', [AnnoncesController::class, 'trajets'])->name('voyage') ; 
    Route::get('/annonces-expediteurs', [AnnoncesController::class, 'expedition'])->name('expedition') ; 
}) ; */


require __DIR__.'/auth.php';