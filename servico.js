document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío real del formulario
    alert('Formulario enviado correctamente. ¡Gracias por tu mensaje!');
});