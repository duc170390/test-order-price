<?php declare(strict_types=1);

use App\Models\ProductAmazon;
use App\Services\CalculateProductPrice;
use PHPUnit\Framework\TestCase;

final class CalculateProductPriceTest extends TestCase
{
    /**
     * @param ProductAmazon $product
     * @param float $expected
     * @dataProvider calculateProductPricePriceProvider
     */
    public function testCalculateProductPrice(ProductAmazon $product, float $expected): void
    {
        $calculator = new CalculateProductPrice();
        $this->assertEquals($expected, $calculator->calculateProductPrice($product));
    }

    /**
     * @return array
     */
    public function calculateProductPricePriceProvider(): array
    {
        return [
            [
                new ProductAmazon(100, 1.5, 2, 3, 4),
                460,
            ],
            [
                new ProductAmazon(200, 50, 3.5, 5, 1.2),
                700,
            ],
        ];
    }
}