<?php

namespace App;

class Persona
{
    // Atributos privados para encapsulamiento
    private $nombre;
    private $edad;

    // Constructor para inicializar los datos de la persona al instanciar la clase
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método que retorna un saludo con la información de la instancia
    public function saludar()
    {
        return "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}