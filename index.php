<?php

require_once 'vendor/autoload.php';

use Models\Product;
// use Models\Order;
// use Services\ShipmentService;
// use Services\InvoiceService;
// use Discounts\FixedDiscount;
// use Discounts\PercentageDiscount;
use Models\DigitalProduct;

// Crear productos
$product1 = new Product(1, "Laptop", 1200);
$product2 = new Product(2, "Mouse", 40);
$product3 = new DigitalProduct(2, "Ebook", 100);

// Crear pedido
// $order = new Order();
// $order->addProduct($product1, 1);
// $order->addProduct($product2, 2);


// Procesar el envío
// $shipmentService = new ShipmentService();
// $shipmentService->processShipment($order);

// Enviar factura
// $invoiceService = new InvoiceService();
// $invoiceService->sendInvoice($order);

// Sin descuento
// echo "Total sin descuento: " . $order->getTotal() . PHP_EOL;

// Aplicar un descuento fijo
// $fixedDiscount = new FixedDiscount(100);
// $order->setDiscount($fixedDiscount);
// echo "Total con descuento fijo: " . $order->calculateTotalWithDiscount() . PHP_EOL;

// Aplicar un descuento porcentual
// $percentageDiscount = new PercentageDiscount(10); // 10% de descuento
// $order->setDiscount($percentageDiscount);
// echo "Total con descuento porcentual: " . $order->calculateTotalWithDiscount() . PHP_EOL;

// Precio con descuento
echo "Precio con descuento del producto físico 1: " . $product1->getDiscountedPrice() . PHP_EOL;
echo "Precio con descuento del producto físico 2: " . $product2->getDiscountedPrice() . PHP_EOL;
echo "Precio con descuento del producto digital: " . $product3->getDiscountedPrice() . PHP_EOL;
