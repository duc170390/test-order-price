<?php

namespace App\Services;

use App\Models\ProductInterface;

class ShippingFeeByWeight implements ShippingFeeInterface
{
    public const COEFFICIENT = 10.0;

    /** @var ProductInterface */
    private $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    /**
     * Get product's shipping fee
     * @return float|null
     */
    public function getShippingFee(): float
    {
        return $this->product->getWeight() * self::COEFFICIENT;
    }
}