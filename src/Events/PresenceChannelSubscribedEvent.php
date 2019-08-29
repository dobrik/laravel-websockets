<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PresenceChannelSubscribedEvent implements SingleToneEventInterface
{
    public $socketId, $userData, $channelName, $channelData;

    /** @var PusherClientMessageEvent */
    public static $eventInstance;

    public function __construct(string $socketId, \stdClass $userData, string $channelName, array $channelData)
    {
        $this->socketId = $socketId;
        $this->userData = $userData;
        $this->channelName = $channelName;
        $this->channelData = $channelData;
    }


    public static function create(...$args): SingleToneEventInterface
    {
        if (!self::$eventInstance) {
            self::$eventInstance = new self(...$args);
        } else {
            self::$eventInstance->__construct(...$args);
        }
        return self::$eventInstance;
    }
}
