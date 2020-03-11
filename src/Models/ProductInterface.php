<?php

namespace App\Models;

interface ProductInterface
{
    /**
     * @return float
     */
    public function getWeight(): float;

    /**
     *
     * @return float
     */
    public function getWidth(): float;

    /**
     * @return float
     */
    public function getHeight(): float;

    /**
     * @return float
     */
    public function getDepth(): float;

    /**
     * @return float
     */
    public function getPrice(): float;
}