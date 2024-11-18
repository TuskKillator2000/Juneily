<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> El Mandil Pasteleria & Mas </title>
    <link rel="stylesheet" href="./styles/index.css">
</head>

<body>


    <header>
        <h1>El Mandil Pasteleria & Mas</h1>
        <div class="carrito">
            <span id="total">Total: $0.00</span>
        </div>
    </header>

    <main>
        <section id="productos" class="productos">

            <div class="galeria-productos">
                <div class="producto"  data-precio="210.00">
                    <img src="./img/frape de fresa.jpg" alt="frappe de fresa">
                    <h3>Frappe de Fresa</h3>
                    <span class="precio">$210.00</span>
                    <button class="comprar">Comprar</button>
                </div>

                <div class="producto" data-precio="250.00">
                    <img src="./img/frape de caramelo.jpg" alt="frappe de caramelo">
                    <h3>Frappe de Caramelo </h3>
                    <span class="precio">$250.00</span>
                    <button class="comprar">Comprar</button>
                </div>

                <div class="producto" data-precio="230.00">
                    <img src="./img/frappe de oreo.jpg" alt="frappe de Oreo">
                    <h3>Frappe de Oreo</h3>
                    <span class="precio">$230.00</span>
                    <button class="comprar">Comprar</button>
                </div>

                <div class="producto" data-precio="310.00">
                    <img src="./img/mangu.jpg" alt="mangu">
                    <h3>Mangu con cebolla,aguacate,
                        queso,salimi y mas</h3>
                    <span class="precio">$310.00</span>
                    <button class="comprar">Comprar</button>
                </div>
                <div class="producto" data-precio="200.00">
                    <img src="./img/tortilla.jpg" alt="tortilla">
                    <h3>Tortilla de Huevo con Vejetales </h3>
                    <span class="precio">$200.00</span>
                    <button class="comprar">Comprar</button>
                </div>

                <div class="producto" data-precio="290.00">
                    <img src="./img/paqueque.jpg" alt="paqueque">
                    <h3>Panqueque con chispa de Chocolate y Fresa</h3>
                    <span class="precio">$290.00</span>
                    <button class="comprar">Comprar</button>
                </div>

                <div class="producto" data-precio="949.00">
                    <img src="./img/biscocho de chocolate.jpg" alt="biscocho de chocolate">
                    <h3>Bizcocho de Chocolate</h3>
                    <span class="precio">$949.00</span>
                    <button class="comprar">Comprar</button>
                </div>

                <div class="producto" data-precio="1000.00">
                    <img src="./img/biscocho de fresa.jpg" alt="biscocho de Fresa">
                    <h3>Bizcocho de </h3> Fresa
                    <span class="precio">$1000.00</span>
                    <button class="comprar">Comprar</button>
                </div>

                <div class="producto" data-precio="2500.00">
                    <img src="./img/cumpleaños.jpg" alt="cumpleaños">
                    <h3>Bizcocho dd Cumpleaños</h3>
                    <span class="precio">$2500.00</span>
                    <button class="comprar">Comprar</button>
                </div>

                <button id="finalizar-compra">Finalizar Compra</button>

            </div>
        </section>


    </main>

    <footer>
        <p>&copy;El Mandil Pasteleria & Mas </p>
        <ul class="redes-sociales">
            <li><a href="#">Facebook</a></li>
            <li><a href="https://www.instagram.com/elmandilpasteleria/?hl=es">Instagram</a></li>
        </ul>
    </footer>

    <script src="./script/index.js"></script>
    <?php

    include("productos.php")
        ?>

</body>

</html>
