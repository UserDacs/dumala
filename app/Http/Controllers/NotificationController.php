<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\NotifyUser;

class NotificationController extends Controller
{
    
    public function sendNotification()
    {
        $user = User::find(1); // Change to the user ID you want to notify

        // Data to be included in the notification
        $data = [
            'image_path' => '/images/sample.jpg',
            'name' => 'John Doe',
            'user' => 'john.doe@example.com',
            'title' => 'Sample Notification Title',
            'url' => '/',
        ];

        // Send the notification
        $user->notify(new NotifyUser($data));

        // Retrieve the latest notification and format it
        $notification = $user->notifications()->latest()->first();

        $response = [
            'image_path' => $notification->data['image_path'],
            'name' => $notification->data['name'],
            'user' => $notification->data['user'],
            'title' => $notification->data['title'],
            'url' => $notification->data['url'],
            'datetime' => $notification->created_at->diffForHumans(), // Human-readable datetime
        ];

        return response()->json($response);
    }
    
}
