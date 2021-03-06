<?php
class CarOrder {
    protected $carOrders = array();
    protected $car;
    
    public function __construct()
    {
      $this->car = new CarFactory();
    }
    
    public function order($model)
    {
      $car = $this->car->make($model);
      $this->carOrders[]=$car->getModel();
    }
    
    public function getCarOrders()
    {
      return json_encode($this->carOrders);
    }
  }