<?php

use App\Http\Controllers\ConversationsController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FriendRequestsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RootController;
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

Route::prefix('conversations')->group(function() {
    Route::get('/', [ConversationsController::class, 'index']);
    Route::get('/user/{id}', [ConversationsController::class, 'read_conversation']);
    Route::get('/create', [ConversationsController::class, 'create']);
    Route::post('/create', [ConversationsController::class, 'create']);
});

Route::prefix('profile')->group(function() {
    Route::get('/', [ProfileController::class, 'index']);
    Route::get('/{id}', [ProfileController::class, 'view_profile']);
    Route::post('/{id}/friend', [ProfileController::class, 'friend_action']);
    Route::post('/{id}/post', [ProfileController::class, 'profile_post']);
    Route::post('/{id}/post/{post_id}/like', [ProfileController::class, 'like_profile_post']);
});

Route::prefix('/')->group(function() {
    Route::redirect('/', '/feed');
    Route::get('/register', [RootController::class, 'register']);
    Route::post('/register', [RootController::class, 'register']);
});

Route::prefix('/feed')->group(function() {
    Route::get('/', [FeedController::class, 'feed']);
    Route::post('/post', [FeedController::class, 'post']);
    Route::post('/post/{id}/like', [FeedController::class, 'like_post']);
    Route::post('/post/{id}/edit', [FeedController::class, 'edit_post']);
    Route::post('/post/{id}/delete', [FeedController::class, 'delete_post']);
    Route::post('/post/{id}/comment', [FeedController::class, 'comment']);
});

Route::prefix('/requests')->group(function() {
    Route::get('/', [FriendRequestsController::class, 'index']);
    Route::post('/{id}', [FriendRequestsController::class, 'action']);
});
