<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PresenceChannelUnsubscribedEvent implements SingleToneEventInterface
{
    public $socketId, $userId, $channelName;

    /** @var PusherClientMessageEvent */
    public static $eventInstance;

    public function __construct(string $socketId, int $userId, string $channelName)
    {
        $this->socketId = $socketId;
        $this->userId = $userId;
        $this->channelName = $channelName;
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
