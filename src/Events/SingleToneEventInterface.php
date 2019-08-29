<?php

namespace BeyondCode\LaravelWebSockets\Events;

interface SingleToneEventInterface
{
    public static function create(...$args): SingleToneEventInterface;
}
