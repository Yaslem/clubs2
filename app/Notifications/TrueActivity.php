<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TrueActivity extends Notification
{
    use Queueable;

    public $activity, $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($activity, $user)
    {
        $this->activity = $activity;
        $this->user = $user;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'activity_id' => $this->activity->id,
            'title' => $this->activity->title,
            'name' => $this->user->name,
            'avatar' => $this->user->avatar,
        ];
    }
}
