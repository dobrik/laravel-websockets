<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PresenceChannelSubscribedEvent implements SingleToneEventInterface
{
    public $socketId, $userId, $channelName, $channelData;

    /** @var PusherClientMessageEvent */
    public static $eventInstance;

    public function __construct(string $socketId, int $userId, string $channelName, array $channelData)
    {
        $this->socketId = $socketId;
        $this->userId = $userId;
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
