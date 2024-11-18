<?php
include("conn.php");

// Array de productos
$productos = [
    ["nombre" => "Frappe de Fresa", "precio" => 210.00],
    ["nombre" => "Frappe de Caramelo", "precio" => 250.00],
    ["nombre" => "Frappe de Oreo", "precio" => 230.00],
    ["nombre" => "Mangú con cebolla, aguacate, queso, salami y más", "precio" => 310.00],
    ["nombre" => "Tortilla de Huevo con Vegetales", "precio" => 200.00],
    ["nombre" => "Panqueque con chispa de Chocolate y Fresa", "precio" => 290.00],
    ["nombre" => "Bizcocho de Chocolate", "precio" => 949.00],
    ["nombre" => "Bizcocho de Fresa", "precio" => 1000.00],
    ["nombre" => "Bizcocho de Cumpleaños", "precio" => 2500.00]
];

// Insertar productos
foreach ($productos as $producto) {
    $nombre = $producto["nombre"];
    $precio = $producto["precio"];
    $sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', $precio)";
    
  
}

// Cerrar la conexión
$conn->close();
?>
