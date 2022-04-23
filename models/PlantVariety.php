<?php

class PlantVariety
{
    public string $name;
    public Plant $plant;
    public int $irrigation_period;
    public int $germination_period;
    public int $fertilizing_period;
    public int $growth_temp;

    public function __construct($name, $plant, $irrigation_period, $germination_period, $fertilizing_period, $growth_temp) {
        $this->name = $name;
        $this->plant = $plant;
        $this->irrigation_period = $irrigation_period;
        $this->germination_period = $germination_period;
        $this->fertilizing_period = $fertilizing_period;
        $this->growth_temp = $growth_temp;
    }
}