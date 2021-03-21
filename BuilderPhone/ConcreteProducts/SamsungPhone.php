<?php

// Concrete Products
class SamsungPhone extends SmartPhone
{
    public function __toString()
    {
        return '<h1>Your Samsung Phone is Ready with the following Specs.</h1>' . '<pre>' . var_export($this, true) . '</pre>';
    }
}