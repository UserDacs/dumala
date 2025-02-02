<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class NotifyUser extends Notification
{
    use Queueable;

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['database']; // Save the notification in the database
    }

    public function toArray($notifiable)
    {
        return [
            'type' => $this->data['type'] ?? '',
            'image_path' => $this->data['image_path'] ?? '',
            'name' => $this->data['name'] ?? '',
            'user' => $this->data['user'] ?? '',
            'user_to' => $this->data['user_to'] ?? '',
            'title' => $this->data['title'] ?? '',
            'url' => $this->data['url'] ?? '',
            'description' => $this->data['description'] ?? '',
            'where' => $this->data['where'] ?? '',
            
        ];
    }
}