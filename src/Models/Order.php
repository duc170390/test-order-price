<?php

namespace App\Models;

class Order
{
    /** @var ProductInterface[] */
    private $products = [];

    /**
     * Add product to order
     * @param ProductInterface $product
     * @return void
     */
    public function addItem(ProductInterface $product): void
    {
        $this->products[] = $product;
    }

    /**
     * Get order's products.
     * @return array
     */
    public function getItems(): array
    {
        return $this->products;
    }
}