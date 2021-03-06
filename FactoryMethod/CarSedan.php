<?php
require_once "ICar.php";

class CarSedan implements Car {
   protected $model = 'Sedan';
   protected $sunRoof = false;
   
   public function getModel()
   {
     return $this->model;
   }
   
   public function hasSunRoof()
   {
     return $this->sunRoof;
   }
 }