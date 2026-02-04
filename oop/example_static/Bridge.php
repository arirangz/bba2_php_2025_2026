<?php

class Bridge
{
    protected static int $count = 0;

    public function __construct(
        protected float $length,
        protected float $width,
    )
    {
        self::$count++;
    }

    public static function getCount():int
    {
        return self::$count;
    }
}