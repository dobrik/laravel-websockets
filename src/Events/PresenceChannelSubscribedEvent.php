<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PresenceChannelSubscribedEvent
{
    public $socketId, $userData, $channelName, $channelData;

    public function __construct(string $socketId, \stdClass $userData, string $channelName, array $channelData)
    {
        $this->socketId = $socketId;
        $this->userData = $userData;
        $this->channelName = $channelName;
        $this->channelData = $channelData;

    }
}
