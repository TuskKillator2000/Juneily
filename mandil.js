// Suponiendo que tienes un array para almacenar los productos comprados
let carrito = [];

// Función para agregar productos al carrito
function agregarAlCarrito(precio) {
    carrito.push(precio);
}

// Función para calcular el total
function calcularTotal() {
    return carrito.reduce((total, precio) => total + precio, 0).toFixed(2);
}

// Evento para finalizar la compra
document.getElementById('finalizar-compra').addEventListener('click', function() {
    if (carrito.length === 0) {
        alert("Tu carrito está vacío.");
        return;
    }
    
    const total = calcularTotal();
    alert(`El total de tu compra es: $${total}`);
    
    // Redirigir a un formulario (aquí debes poner la URL de tu formulario)
    window.location.href = "servico.html"; // Cambia esto por la URL real del formulario
});

// Ejemplo de cómo agregar productos al carrito
document.querySelectorAll('.comprar').forEach((boton) => {
    boton.addEventListener('click', function() {
        const precio = parseFloat(this.parentElement.getAttribute('data-precio'));
        agregarAlCarrito(precio);
        document.getElementById('total').textContent = `Total: $${calcularTotal()}`;
    });
});