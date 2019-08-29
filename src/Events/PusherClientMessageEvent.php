<?php

namespace BeyondCode\LaravelWebSockets\Events;

class PusherClientMessageEvent implements SingleToneEventInterface
{
    public $socketId, $channelName, $data;

    /** @var PusherClientMessageEvent */
    public static $eventInstance;

    public function __construct(string $socketId, string $channelName, $data)
    {
        $this->socketId = $socketId;
        $this->channelName = $channelName;
        $this->data = $data;
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
