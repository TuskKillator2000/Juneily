<?php
include("conn.php");

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$tarjeta = $_POST['tarjeta'];
$comentarios = $_POST['comentarios'];
$total_compra = $_POST['total-compra'];

// Insertar usuario
$sql_usuario = "INSERT INTO usuarios (nombre, email, direccion, telefono, tarjeta) VALUES ('$nombre', '$email', '$direccion', '$telefono', '$tarjeta')";
if ($conn->query($sql_usuario) === TRUE) {
    $usuario_id = $conn->insert_id;
} else {
    die("Error insertando usuario: " . $conn->error);
}

// Insertar detalle de compra
$productos_comprados = [
    ["producto_id" => 1, "cantidad" => 2],
    ["producto_id" => 2, "cantidad" => 1]
];

foreach ($productos_comprados as $compra) {
    $producto_id = $compra['producto_id'];
    $cantidad = $compra['cantidad'];
    $sql_producto = "SELECT precio FROM productos WHERE id = $producto_id";
    $result = $conn->query($sql_producto);
    $row = $result->fetch_assoc();
    $precio = $row['precio'];
    $total = $cantidad * $precio;

    $sql_detalle = "INSERT INTO detallescompra (usuario_id, producto_id, cantidad, total) VALUES ($usuario_id, $producto_id, $cantidad, $total)";
    if ($conn->query($sql_detalle) === TRUE) {
        echo "Detalle de compra insertado correctamente.<br>";
    } else {
        die("Error insertando detalle de compra: " . $conn->error);
    }
}

// Cerrar la conexión
$conn->close();
?>
