<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SMail_Hoantat_Donhang extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public $don_hang;

    public function __construct($user,$don_hang)
    {
        $this->subject('Đã giao hàng');
        $this->user=$user;
        $this->don_hang=$don_hang;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('trunghaubt97@gmail.com','H-Tech Shop')->view('pages.mail.hoan_tat_giao_hang',['user'=>$this->user, 'dh'=>$this->don_hang]);
    }
}
