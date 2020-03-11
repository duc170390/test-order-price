<?php declare(strict_types=1);

use App\Models\ProductAmazon;
use App\Services\CalculateShippingFee;
use PHPUnit\Framework\TestCase;

final class CalculateProductShippingFeeTest extends TestCase
{
    /**
     * @param ProductAmazon $product
     * @param float $expected
     * @dataProvider calculateProductShippingFeeProvider
     */
    public function testCalculateProductShippingFeeTest(ProductAmazon $product, float $expected): void
    {
        $calculator = new CalculateShippingFee();
        $this->assertEquals($expected, $calculator->getShippingFee($product));
    }

    /**
     * @return array
     */
    public function calculateProductShippingFeeProvider(): array
    {
        return [
            [
                new ProductAmazon(100, 1.5, 2, 3, 4),
                360,
            ],
            [
                new ProductAmazon(200, 50, 3.5, 5, 1.2),
                500,
            ],
        ];
    }
}