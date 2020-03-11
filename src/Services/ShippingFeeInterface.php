<?php

namespace App\Services;

interface ShippingFeeInterface
{
    /**
     * Get product shipping fee
     * @return float
     */
    public function getShippingFee(): float;
}