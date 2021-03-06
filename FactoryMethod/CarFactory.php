<?php

class CarFactory {
 
 protected $car;
 
 public function make($type)
 {
    return $this->car = new $type() ?? null;
 }
}