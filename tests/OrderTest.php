<?php declare(strict_types=1);

use App\Models\Order;
use PHPUnit\Framework\TestCase;

final class OrderTest extends TestCase
{
    public function testCannotAddInvalidProduct(): void
    {
        $order = new Order();
        $this->expectException(TypeError::class);
        $order->addItem(new stdClass());
    }
}