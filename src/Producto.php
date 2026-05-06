<?php

namespace App;

class Producto
{
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function mostrarProducto()
    {
        return "Producto: " . $this->nombre . " | Precio: $" . $this->precio;
    }
}