<?php

namespace App;

class Producto
{
    // Atributos de la clase
    private $nombre;
    private $precio;

    // Método constructor para asignar valores al producto
    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // Método para mostrar el detalle del producto de forma formateada
    public function mostrarProducto()
    {
        return "Producto: " . $this->nombre . " | Precio: $" . $this->precio;
    }
}