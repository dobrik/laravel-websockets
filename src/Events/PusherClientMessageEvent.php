<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PusherClientMessageEvent
{
    public $socketId, $channelName, $data;

    public function __construct(string $socketId, string $channelName, $data)
    {
        $this->socketId = $socketId;
        $this->channelName = $channelName;
        $this->data = $data;
    }
}
