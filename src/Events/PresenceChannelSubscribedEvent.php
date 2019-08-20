<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PresenceChannelSubscribedEvent
{
    public $socketId, $userId, $channelName, $channelData;

    public function __construct(string $socketId, int $userId, string $channelName, array $channelData)
    {
        $this->socketId = $socketId;
        $this->userId = $userId;
        $this->channelName = $channelName;
        $this->channelData = $channelData;

    }
}
