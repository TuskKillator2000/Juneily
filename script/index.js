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

    // Crear un formulario dinámicamente y enviar los datos
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'servicio.html';

    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'total-compra';
    input.value = total;

    form.appendChild(input);
    document.body.appendChild(form);

    form.submit();
});

// Ejemplo de cómo agregar productos al carrito
document.querySelectorAll('.comprar').forEach((boton) => {
    boton.addEventListener('click', function() {
        const precio = parseFloat(this.parentElement.getAttribute('data-precio'));
        agregarAlCarrito(precio);
        document.getElementById('total').textContent = `Total: $${calcularTotal()}`;
    });
});
