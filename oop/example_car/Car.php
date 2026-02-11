<?php
class Car
{
    protected const UNIT = "km/h";

    public function __construct(
        private string $brand,
        private float $maxSpeed
    ) {}

    public function getBrand():string
    {
        return $this->brand;
    }

    public function setMaxSpeed(float $maxSpeed): self
    {
        if ($maxSpeed >= 0) {
            $this->maxSpeed = $maxSpeed;
        } else {
            $this->maxSpeed = 0;
        }
        return $this;
    }
    public function getMaxSpeed(): float
    {
        return $this->maxSpeed;
    }


    public function displayBrand(): void
    {
        echo "Brand: " . $this->brand;
    }

    public function getMaxSpeedWithKm(): string
    {
        return $this->maxSpeed . self::UNIT;
    }
}
