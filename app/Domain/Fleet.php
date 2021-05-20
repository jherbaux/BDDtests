<?php


class fleet
{

    public $vehicles = [];

  function addToMyFleet(Vehicle $vehicle) {
    $this->vehicles[] = $vehicle;

 }

 function isInMyFleet(Vehicle $vehicle) {
   return   $this->vehicles[$vehicle];

 }

 function getVehicles() : Collection {
      return $this->vehicles;
 }

public function type(): TYPE_NAME
{
      $type = "";
     foreach($this->vehicles as $vehicle) {
         $type = $vehicle->getType();
     }

    /** @var TYPE_NAME $type */
    return $type;
}

}