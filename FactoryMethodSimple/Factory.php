<?php

abstract class Factory
{
    public static function create($type)
    {
        return new $type();
    }
}