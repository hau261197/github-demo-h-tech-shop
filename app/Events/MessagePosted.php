<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessagePosted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    protected $message;
    protected $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Message $message, User $user)
    {
        $this->user = $user;
        $this->message = $message;
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
    /**
     *như trên mình đã nói nếu các bạn lưu vào CSDL vào truyền từ biến message qua bên lấy chung ta có thể lấy
     * $this->message->room_id, nhưng ở đấy mình giả sử room là 1
     *Tên room ở đây sẽ là chatroom.1
     */
        return new PresenceChannel('chatroom.'. 1);
    }
}
