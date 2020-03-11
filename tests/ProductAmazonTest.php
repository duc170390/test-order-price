<?php declare(strict_types=1);

use App\Models\ProductAmazon;
use PHPUnit\Framework\TestCase;

final class ProductAmazonTest extends TestCase
{
    public function testCanBeCreatedFromValidData(): void
    {
        $this->assertInstanceOf(
            ProductAmazon::class,
            new ProductAmazon(1, 2, 3, 4, 5)
        );
    }

    public function testCannotBeCreatedFromInvalidData(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        new ProductAmazon(-1, 2, 3, 4, 5);
    }
}