<?php

// ESTO NO SE HACE, ESTO ESTA MAL... Este diseño viola el Principio de Sustitución de Liskov (LSP). Aunque DigitalProduct extiende Product, su comportamiento es diferente en el método getPrice. En el código que espera un Product, si reemplazamos por DigitalProduct, podríamos introducir problemas porque el comportamiento de getPrice cambia.

namespace Models;

class DigitalProduct extends Product
{
  // Precio de los productos digitales es la mitad del precio de los productos físicos.
  public function getPrice(): float
  {
    return $this->price / 2;
  }
}
