<?php
class ApplePhone extends SmartPhone
{
    public function __toString()
    {
        return '<h1>Your Apple Phone is Ready with the following Specs.</h1>' . '<pre>' . var_export($this, true) . '</pre>';
    }
}