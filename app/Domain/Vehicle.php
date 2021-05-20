<?php

class Vehicle {


    private $type;

    /**
     * Vehicle constructor.
     * @param $type
     */
    function __construct($type) {

        $this->type = $type;
    }


    public function getType() {
        return $this->type;
     }

}