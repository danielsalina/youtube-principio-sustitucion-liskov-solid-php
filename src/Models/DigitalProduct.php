<?php

namespace Models;

class DigitalProduct extends Product
{
  // Precio de los productos digitales es la mitad del precio de los productos físicos.
  public function getDiscountedPrice(): float
  {
    return $this->price / 2;
  }
}
