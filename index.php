<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEAK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Joti+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css?v=2">
</head>

<body>
    <header>
        <nav class="navegacion">
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="sabores.php">SABORES</a></li>
            </ul>
            <a href="index.php" class="logo">PEAK</a>
            <ul>
                <li><a href="ranking.php">RANKING</a></li>
                <li><a href="contacto.php">CONTACTO</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <img src="img-/hero-inicio.png"
                 alt="Helados PEAK"
                 class="hero-imagen">

            <h1>SABOR A OTRO NIVEL</h1>
            <p class="bajada-hero">
                PROTEÍNA · PLANT-BASED · INGREDIENTES SIMPLES Y FRESCOS
            </p>
            <a href="sabores.php" class="boton">
                DESCUBRÍ LOS SABORES
            </a>
        </section>

        <section class="sobre-peak">
            <div class="fondo-derretido">
                <div class="contenido-sobre">
                    <div class="bochas-izquierda">
                        <img src="img-/bocha3.png"
                             alt="Helado de vainilla"
                             class="bocha">
                        <img src="img-/bocha2.png"
                             alt="Helado de pistacho"
                             class="bocha">
                    </div>
                    <p class="texto-sobre">
                        En <strong>PEAK</strong> creemos que comer mejor no
                        significa disfrutar menos. Por eso creamos helados
                        que combinan sabor, nutrición e ingredientes simples,
                        para que elegir lo que te hace bien también sea elegir
                        lo que realmente tenés ganas de comer.
                    </p>
                    <div class="bochas-derecha">
                        <img src="img-/bocha4.png"
                             alt="Helado de cookies"
                             class="bocha">
                        <img src="img-/bocha1.png"
                             alt="Helado de chocolate"
                             class="bocha">
                    </div>
                </div>
            </div>
        </section>

        <section class="productos">
            <h2>PROBÁ TU PRÓXIMO FAVORITO</h2>
            <p class="subtitulo">
                Un sabor para cada PEAK
            </p>
            <a href="sabores.php" class="boton boton-chico">
                VER TODOS
            </a>
            <div class="contenedor-productos">

                <article class="producto">
                    <img src="img-/chocolate-brownie-pro.png"
                         alt="Chocolate Brownie PRO">
                    <h3>Chocolate Brownie</h3>
                    <p>PRO · Alto en proteína</p>
                </article>

                <article class="producto">
                    <img src="img-/pistachio-plant.png"
                         alt="Pistachio PLANT">
                    <h3>Pistachio</h3>
                    <p>PLANT · Base vegetal</p>
                </article>


                <article class="producto">
                    <img src="img-/bananapeanut-plant.png"
                         alt="Banana Peanut PLANT">
                    <h3>Banana Peanut</h3>
                    <p>PLANT · Base vegetal</p>
                </article>

                <article class="producto">
                    <img src="img-/strawberry-cream.png"
                         alt="Strawberry Cream PURE">
                    <h3>Strawberry Cream</h3>
                    <p>PURE · Ingredientes frescos</p>
                </article>
            </div>

        </section>
        <img src="img-/franja-colores.png"
             alt=""
             class="franja-colores">

        <section class="peak-semana">
            <div class="peak-semana-imagen">
                <img src="img-/chocolate-brownie-pro.png"
                     alt="Chocolate Brownie PRO">
            </div>

            <div class="peak-semana-texto">
                <h2>
                    EL PEAK DE LA SEMANA<br>
                    VOTADO POR USTEDES
                </h2>
                <p>
                    Chocolate Brownie PRO es el favorito de esta
                    semana. Cremoso, intenso y con pedacitos de
                    brownie. Elegido por la comunidad PEAK a través
                    de sus puntuaciones.
                </p>

                <p class="estrellas">
                    ★ ★ ★ ★ ★
                </p>

                <a href="sabores.php" class="boton boton-chico">
                    VER SABOR
                </a>
            </div>

        </section>
    </main>

    <footer>
        <img src="img-/montanas-footer.png"
             alt=""
             class="montanas-footer">
        <div class="footer-contenido">
            <nav class="footer-menu">
                <ul>
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="sabores.php">SABORES</a></li>
                    <li><a href="#">SOBRE</a></li>
                    <li><a href="contacto.php">CONTACTO</a></li>
                </ul>
            </nav>

            <div class="footer-centro">
                <a href="index.php" class="logo-footer">
                    PEAK
                </a>
                <p>Llevá el sabor más alto.</p>
                <img src="img-/gato-footer.png"
                     alt="Mascota PEAK">
            </div>

            <nav class="footer-menu">
                <ul>
                    <li><a href="sabores.php">PRO</a></li>
                    <li><a href="sabores.php">PLANT</a></li>
                    <li><a href="sabores.php">PURE</a></li>
                    <li><a href="ranking.php">ENCONTRÁ TU PEAK</a></li>
                </ul>
            </nav>
        </div>

        <p class="copyright">
            © 2026 PEAK · Buenos Aires, Argentina · Todos los derechos reservados
        </p>
    </footer>
</body>
</html>