<?php
require_once "ICar.php";

class CarFamily implements Car {
   protected $model = 'Family';
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