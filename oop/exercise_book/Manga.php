<?php
class Manga extends Book
{
    public function __construct(string $title, float $price, float $vat, protected string $mangaType)
    {
        return parent::__construct($title, $price, $vat);
    }

    /**
     * Get the value of mangaType
     */
    public function getMangaType(): string
    {
        return $this->mangaType;
    }

    /**
     * Set the value of mangaType
     */
    public function setMangaType(string $mangaType): self
    {
        $this->mangaType = $mangaType;

        return $this;
    }
}