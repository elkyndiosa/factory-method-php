<?php
class HTCPhone extends SmartPhone
{
    public function __toString()
    {
        return '<h1>Your HTC Phone is Ready with the following Specs.</h1>' . '<pre>' . var_export($this, true) . '</pre>';
    }
}