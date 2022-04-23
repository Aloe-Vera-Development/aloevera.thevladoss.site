<?php

class UserPlant
{
    public string $name;
    public PlantVariety $plantVariety;
    public DateTime $datetime;

    public function __construct($name, $plantVariety, $datetime) {
        $this->name = $name;
        $this->plantVariety = $plantVariety;
        $this->datetime = $datetime;
    }
}