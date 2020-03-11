<?php

namespace App\Services;

use App\Models\ProductInterface;

class CalculateProductPrice
{
    /** @var CalculateShippingFee */
    private $calculateShippingFee;

    /**
     * CalculateProductPrice constructor.
     */
    public function __construct()
    {
        $this->calculateShippingFee = new CalculateShippingFee();
    }

    /**
     * Calculate product price
     * @param ProductInterface $product
     * @return float
     */
    public function calculateProductPrice(ProductInterface $product): float
    {
        $shippingFee = $this->calculateShippingFee->getShippingFee($product);

        return $product->getPrice() + $shippingFee;
    }
}