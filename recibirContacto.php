<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mensaje enviado | PEAK</title>

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

        <section class="mensaje-enviado">

            <!-- BOCHAS DECORATIVAS -->

            <img src="img-/bocha5.png"
                 alt=""
                 class="bocha-mensaje bocha-mensaje-1">

            <img src="img-/bocha6.png"
                 alt=""
                 class="bocha-mensaje bocha-mensaje-2">

            <img src="img-/bocha7.png"
                 alt=""
                 class="bocha-mensaje bocha-mensaje-3">

            <img src="img-/bocha8.png"
                 alt=""
                 class="bocha-mensaje bocha-mensaje-4">


            <div class="mensaje-enviado-contenido">

                <h1>¡RECIBIMOS TU MENSAJE!</h1>

                <p class="mensaje-gracias">
                    Gracias
                    <strong>
                        <?php echo $_POST['nombre']; ?>
                    </strong>,
                    por escribirnos.
                </p>

                <p class="mensaje-respuesta">
                    Vamos a responderte a
                    <strong>
                        <?php echo $_POST['email']; ?>
                    </strong>
                    lo antes posible.
                </p>


                <div class="mensaje-recibido">

                    <p class="mensaje-recibido-titulo">
                        TU MENSAJE
                    </p>

                    <p>
                        <?php echo $_POST['mensaje']; ?>
                    </p>

                </div>


                <a href="index.php" class="boton boton-volver">
                    VOLVER AL INICIO
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