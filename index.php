<?php /** @noinspection DuplicatedCode */
/** @noinspection ForgottenDebugOutputInspection */

require __DIR__ . '/vendor/autoload.php';

use App\Services\CalculateOrderPrice;
use App\Models\Order;
use App\Models\ProductAmazon;
use App\Services\CalculateProductPrice;
use App\Services\CalculateShippingFee;

$calculator = new CalculateOrderPrice();

$shippingFeeCalc = new CalculateShippingFee();
$priceCalc = new CalculateProductPrice();
$order = new Order();
$productA = new ProductAmazon(100, 1.5, 2, 3, 4);
echo 'Shipping fee:', PHP_EOL;
var_dump($shippingFeeCalc->getShippingFee($productA));

echo 'Total Price Product:', PHP_EOL;
var_dump($priceCalc->calculateProductPrice($productA));
$order->addItem($productA);
echo 'Order Gross Price when contain only product A:', PHP_EOL;
var_dump($calculator->calculateOrderGrossPrice($order));

echo PHP_EOL, 'product B:', PHP_EOL;
$productB = new ProductAmazon(200, 50, 3.5, 5, 1.2);
echo 'Shipping fee:', PHP_EOL;
var_dump($shippingFeeCalc->getShippingFee($productB));

echo 'Total Price Product:', PHP_EOL;
var_dump($priceCalc->calculateProductPrice($productB));
$order->addItem($productB);
echo 'Order Gross Price when contain product A and product B:', PHP_EOL;
var_dump($calculator->calculateOrderGrossPrice($order));

echo PHP_EOL, 'Order 2:', PHP_EOL;
$order2 = new Order();
$productC = new ProductAmazon(10, 1, 1, 1, 1);
echo 'Shipping fee:', PHP_EOL;
var_dump($shippingFeeCalc->getShippingFee($productC));

echo 'Total Price Product:', PHP_EOL;
var_dump($priceCalc->calculateProductPrice($productC));
$order2->addItem($productC);
echo 'Order2 Gross Price when contain only product C:', PHP_EOL;
var_dump($calculator->calculateOrderGrossPrice($order2));

echo PHP_EOL, 'product D:', PHP_EOL;
$productD = new ProductAmazon(20, 40, 1, 1, 1);
echo 'Shipping fee:', PHP_EOL;
var_dump($shippingFeeCalc->getShippingFee($productD));

echo 'Total Price Product:', PHP_EOL;
var_dump($priceCalc->calculateProductPrice($productD));
$order2->addItem($productD);
echo 'Order2 Gross Price when contain product C and product D:', PHP_EOL;
var_dump($calculator->calculateOrderGrossPrice($order2));