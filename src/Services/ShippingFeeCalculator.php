<?php

namespace App\Services;

class ShippingFeeCalculator
{
    /** @var ShippingFeeInterface[] */
    private $shippingFees = [];

    /**
     * Add shipping fee type
     * @param ShippingFeeInterface $shippingFeeType
     * @return void
     */
    public function addShippingFee(ShippingFeeInterface $shippingFeeType): void
    {
        $this->shippingFees[] = $shippingFeeType->getShippingFee();
    }

    /**
     * calculate shipping fee
     * @return float
     */
    public function calculateShippingFee(): float
    {
        if (!$this->shippingFees) {
            return 0;
        }

        return max($this->shippingFees);
    }
}