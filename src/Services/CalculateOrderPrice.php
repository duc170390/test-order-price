<?php

namespace App\Services;

use App\Models\Order;
use App\Models\ProductInterface;

class CalculateOrderPrice
{
    /** @var CalculateProductPrice */
    private $calculateProductPrice;

    /**
     * CalculateOrderPrice constructor.
     */
    public function __construct()
    {
        $this->calculateProductPrice = new CalculateProductPrice();
    }

    /**
     * Calculate order gross price
     * @param Order $order
     * @return float
     */
    public function calculateOrderGrossPrice(Order $order): float
    {
        $price = 0;
        /** @var ProductInterface $product */
        foreach ($order->getItems() as $product) {
            $price += $this->calculateProductPrice->calculateProductPrice($product);
        }

        return $price;
    }
}