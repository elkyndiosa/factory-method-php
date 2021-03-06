<?php
require_once "ICar.php";

class CarSport implements Car {
   protected $model = 'sport';
   protected $sunRoof = true;
   
   public function getModel()
   {
     return $this->model;
   }
   
   public function hasSunRoof()
   {
     return $this->sunRoof;
   }
 }