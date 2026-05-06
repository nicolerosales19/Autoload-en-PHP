# Laboratorio PSR-4 y Composer en PHP

**Estudiante:** Nicole Rosales (8-1031-1508)
**Materia:** Desarrollo de Software VII
**Universidad:** Universidad Tecnológica de Panamá (UTP)

---

## Descripción del Proyecto

Este laboratorio tiene como objetivo implementar el estándar **PSR-4** para la carga automática de clases en PHP utilizando **Composer**.

Se desarrolla una estructura organizada basada en *namespaces*, permitiendo la correcta separación de responsabilidades y facilitando la escalabilidad del proyecto.

El sistema incluye clases de ejemplo como **Persona** y **Producto**, las cuales son cargadas automáticamente sin necesidad de `require` o `include`.

---

## Guía de Instalación

Sigue estos pasos para ejecutar el proyecto correctamente:

### 1. Clonar el repositorio

```bash
git clone https://github.com/nicolerosales19/Autoload-en-PHP
cd repositorio
```

### 2. Instalar dependencias con Composer

```bash
composer install
```

### 3. Generar el autoload (PSR-4)

```bash
composer dump-autoload
```

### 4. Ejecutar el proyecto

```bash
php index.php
```

---

## Estructura del Proyecto

```plaintext
├── src/
│   ├── Persona.php
│   └── Producto.php
├── vendor/
├── composer.json
├── index.php
└── README.md
```

### Relación Namespace y Carpeta

El archivo `composer.json` define:

```json
"autoload": {
    "psr-4": {
        "App\\": "src/"
    }
}
```

Esto significa que:

* El namespace `App\` apunta directamente a la carpeta `src/`
* Ejemplo:

  * `App\Persona` → `src/Persona.php`
  * `App\Producto` → `src/Producto.php`


## Conclusiones Técnicas

###  Mantenibilidad

El uso de PSR-4 permite una estructura clara y organizada del código, facilitando su mantenimiento, escalabilidad y comprensión por otros desarrolladores.

### Eficiencia de Memoria (Lazy Loading)

Composer implementa carga automática bajo demanda (*lazy loading*), lo que significa que las clases solo se cargan cuando son necesarias, optimizando el uso de memoria.

### Estandarización

PSR-4 es un estándar reconocido que asegura consistencia en proyectos PHP, promoviendo buenas prácticas y compatibilidad entre diferentes librerías y frameworks.

---

## Higiene del Proyecto

La carpeta `vendor/` está excluida del repositorio mediante el archivo `.gitignore`, ya que contiene dependencias que pueden ser reinstaladas con Composer.

---
