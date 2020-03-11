<?php

namespace App\Services;

use App\Models\ProductInterface;

class ShippingFeeByDimension implements ShippingFeeInterface
{
    public const COEFFICIENT = 15.0;

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
        $dimension = $this->product->getWidth() * $this->product->getHeight()  * $this->product->getDepth() ;
        return $dimension * self::COEFFICIENT;
    }
}