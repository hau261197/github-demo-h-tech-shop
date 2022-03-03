<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SMail_DonHang extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $ds_don_hang;
    public $ma_dh;
    public $giam_gia;
    public function __construct($ds_don_hang, $ma_dh, $giam_gia)
    {
        $this->subject('Đơn đặt hàng');
        $this->ds_don_hang=$ds_don_hang;
        $this->ma_dh = $ma_dh;
        $this->giam_gia=$giam_gia;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('trunghaubt97@gmail.com','H-Tech Shop')->view('pages.mail.don_dat_hang',['ds_don_hang'=>$this->ds_don_hang,'ma_dh'=>$this->ma_dh,'giam_gia'=>$this->giam_gia]);
    }
}
