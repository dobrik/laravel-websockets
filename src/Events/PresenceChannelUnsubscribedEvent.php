<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PresenceChannelUnsubscribedEvent
{
    public $socketId, $userData, $channelName;

    public function __construct(string $socketId, \stdClass $userData, string $channelName)
    {
        $this->socketId = $socketId;
        $this->userData = $userData;
        $this->channelName = $channelName;
    }
}
