<?php

// Separamos la lógica de envío en su propia clase, lo que hace que la clase Order no se encargue de esta responsabilidad.

namespace Services;

use Models\Order;

class ShipmentService
{
    public function processShipment(Order $order)
    {
        // Lógica de procesamiento de envío
        echo "Envío procesado para pedido con total: {$order->getTotal()}\n";
    }
}
