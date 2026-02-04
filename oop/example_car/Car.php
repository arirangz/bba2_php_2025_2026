<?php
class Car
{

    public function __construct(
        public string $brand,
        public float $maxSpeed
    )
    {
    }

    public function displayBrand():void
    {
        echo "Brand: ".$this->brand;
    }

    public function getMaxSpeedWithKm():string
    {
        return $this->maxSpeed."km/h";
    }
}