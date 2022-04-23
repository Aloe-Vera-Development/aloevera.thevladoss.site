<?php

class Plant
{
    public string $name;
    public string $latin_name;
    public PlantType $plantType;
    public string $description;
    public string $photo;

    public function __construct($name, $latin_name, $plantType, $description, $photo) {
        $this->name = $name;
        $this->latin_name = $latin_name;
        $this->plantType = $plantType;
        $this->description = $description;
        $this->photo = $photo;
    }

}