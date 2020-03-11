<?php

namespace App\Services;

use App\Models\ProductInterface;

class CalculateShippingFee
{
    /**
     * Get product shipping fee
     * @param ProductInterface $product
     * @return float
     */
    public function getShippingFee(ProductInterface $product): float
    {
        $calculator = new ShippingFeeCalculator();
        $calculator->addShippingFee(new ShippingFeeByWeight($product));
        $calculator->addShippingFee(new ShippingFeeByDimension($product));
        // add more shipping fee here

        return $calculator->calculateShippingFee();
    }
}