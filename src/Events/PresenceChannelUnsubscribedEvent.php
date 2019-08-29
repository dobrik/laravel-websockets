<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PresenceChannelUnsubscribedEvent implements SingleToneEventInterface
{
    public $socketId, $userData, $channelName;

    /** @var PusherClientMessageEvent */
    public static $eventInstance;

    public function __construct(string $socketId, \stdClass $userData, string $channelName)
    {
        $this->socketId = $socketId;
        $this->userData = $userData;
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
