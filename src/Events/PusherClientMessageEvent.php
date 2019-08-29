<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PusherClientMessageEvent implements SingleToneEventInterface
{
    public $socketId, $userData, $channelName, $messageData;

    /** @var PusherClientMessageEvent */
    public static $eventInstance;

    public function __construct(string $socketId, \stdClass $userData, string $channelName, $messageData)
    {
        $this->socketId = $socketId;
        $this->userData = $userData;
        $this->channelName = $channelName;
        $this->messageData = $messageData;
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
