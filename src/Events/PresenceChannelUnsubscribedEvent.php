<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PresenceChannelUnsubscribedEvent
{
    public $socketId, $userId, $channelName;

    public function __construct(string $socketId, int $userId, string $channelName)
    {
        $this->socketId = $socketId;
        $this->userId = $userId;
        $this->channelName = $channelName;
    }
}
