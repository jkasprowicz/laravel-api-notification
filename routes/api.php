<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Notifications\NewNotification;
use App\Http\Controllers\NotificationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/send-notification', [NotificationController::class, 'sendNotification']);

Route::get('/user/{id}/notifications', function ($id) {
    $user = \App\Models\User::findOrFail($id);
    return response()->json($user->notifications);
});

Route::get('/notifications', function () {
    $user = \App\Models\User::findOrFail($userId);
    return response()->json($user->notifications);
});

Route::post('/notifications/{id}/mark-read', function ($id) {
    $notification = \Illuminate\Notifications\DatabaseNotification::findOrFail($id);
    $notification->markAsRead();
    return response()->json(['message' => 'Notification marked as read']);
});

Route::get('/notifications/unread/{userId}', function ($userId) {
    $user = \App\Models\User::findOrFail($userId); 
    return response()->json($user->unreadNotifications);
});

