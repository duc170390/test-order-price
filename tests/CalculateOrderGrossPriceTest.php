<?php declare(strict_types=1);

use App\Models\Order;
use App\Models\ProductAmazon;
use App\Services\CalculateOrderPrice;
use PHPUnit\Framework\TestCase;

final class CalculateOrderGrossPriceTest extends TestCase
{
    /**
     * @param Order $order
     * @param float $expected
     * @dataProvider calculateOrderGrossPriceProvider
     */
    public function testCalculateOrderGrossPrice(Order $order, float $expected): void
    {
        $calculator = new CalculateOrderPrice();
        $this->assertEquals($expected, $calculator->calculateOrderGrossPrice($order));
    }

    /**
     * @return array
     */
    public function calculateOrderGrossPriceProvider(): array
    {
        $order1 = new Order();
        $order1->addItem(new ProductAmazon(100, 1.5, 2, 3, 4));
        $order1->addItem(new ProductAmazon(200, 50, 3.5, 5, 1.2));

        $order2 = new Order();
        $order2->addItem(new ProductAmazon(10, 1, 1, 1, 1));
        $order2->addItem(new ProductAmazon(20, 40, 1, 1, 1));
        return [
            [
                $order1,
                1160,
            ],
            [
                $order2,
                445,
            ],
        ];
    }
}