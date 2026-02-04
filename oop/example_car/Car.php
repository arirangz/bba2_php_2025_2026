<?php
class Car
{
    public string $brand;
    public float $maxSpeed;

    public function displayBrand():void
    {
        echo "Brand: ".$this->brand;
    }
}