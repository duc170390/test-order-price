<?php

namespace App\Models;

use InvalidArgumentException;

class ProductAmazon implements ProductInterface
{
    /** @var float */
    private $price;

    /** @var float */
    private $weight;

    /** @var float */
    private $width;

    /** @var float */
    private $height;

    /** @var float */
    private $depth;

    /**
     * Product constructor.
     * @param float $price
     * @param float $weight
     * @param float $width
     * @param float $height
     * @param float $depth
     */
    public function __construct(
        float $price,
        float $weight,
        float $width,
        float $height,
        float $depth
    ) {
        if ($price <= 0 || $weight <= 0 || $width <= 0 || $height <= 0 || $depth <= 0) {
            throw new InvalidArgumentException('Invalid data');
        }
        $this->price = $price;
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getDepth(): float
    {
        return $this->depth;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}