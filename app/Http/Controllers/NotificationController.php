<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\NewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function sendNotification(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'message' => 'required|string',
            'urgency' => 'required|string',
        ]);
    
        $user = User::findOrFail($validated['user_id']);
    
        // Send the notification
        $user->notify(new NewNotification($validated['message'], $validated['urgency']));
    
        return response()->json(['message' => 'Notification sent successfully.']);
    }
}
