<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Persona;
use App\Producto;

$persona = new Persona("Nicole", 20);
$producto = new Producto("Escritorio Sencillo", 114);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio PSR-4</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #d3f0fd; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .main-card {
            background-color: white;
            width: 90%;
            max-width: 700px; 
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(93, 42, 122, 0.15);
            border-top: 10px solid #ab75ca; 
        }
        h1 {
            color: #9d67bd;
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
        }
        .section {
            background-color: #ddf0fd;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 12px;
            border-left: 5px solid #00aae4;
        }
        .section-title {
            color: #00aae4;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            margin-bottom: 10px;
            display: block;
        }
        .content {
            color: #333;
            font-size: 1.1rem;
            margin: 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
            color: #999;
        }
    </style>
</head>
<body>

<div class="main-card">
    <h1>Autoload con Composer</h1>

    <div class="section">
        <span class="section-title">Clase Persona</span>
        <p class="content"><?php echo $persona->saludar(); ?></p>
    </div>

    <div class="section">
        <span class="section-title">Clase Producto</span>
        <p class="content"><?php echo $producto->mostrarProducto(); ?></p>
    </div>

    <div class="footer">
        Nicole Rosales - Desarrollo de Software VII
    </div>
</div>

</body>
</html>