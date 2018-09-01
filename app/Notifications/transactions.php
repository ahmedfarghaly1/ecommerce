<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon ;
use App\transactions_ar;


class transactions extends Notification
{
    use Queueable;
    protected $sender;
    protected $transaction_id;
    protected $managemnt;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($transaction_id,$sender,$management)
    {
        $this->sender = $sender;
        $this->transaction_id =$transaction_id;
        $this->management = $management;
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
            'sender' => $this->sender,
            'transaction' => $this->transaction_id,
            'managment' => $this->management,
            'transaction_time' => Carbon::now(),
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
