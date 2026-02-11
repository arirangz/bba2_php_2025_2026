<?php

class Book
{
    public function __construct(
        protected string $title,
        protected float $price,
        protected float $vat
    ) {}

    public function getPriceWithVAT():float
    {
        return $this->price + ($this->price * $this->vat);
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of vat
     */
    public function getVat(): float
    {
        return $this->vat;
    }

    /**
     * Set the value of vat
     */
    public function setVat(float $vat): self
    {
        $this->vat = $vat;

        return $this;
    }
}
