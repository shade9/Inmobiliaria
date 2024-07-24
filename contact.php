<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria Elegante - Contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="catalog.php">Catálogo</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li><a href="about.php">Nosotros</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="container">
            <h2>Contacto</h2>
            <p>Estamos aquí para ayudarte a encontrar tu hogar ideal. No dudes en contactarnos para cualquier consulta o para programar una visita a nuestras propiedades.</p>
            
            <h3>Información de contacto</h3>
            <p>Dirección: Calle Principal 123, Ciudad Ejemplo, CP 12345</p>
            <p>Teléfono: (123) 456-7890</p>
            <p>Email: info@inmobiliariaelegante.com</p>
            
            <h3>Formulario de contacto</h3>
            <form action="#" method="post">
                <div>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="phone">Teléfono:</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div>
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit">Enviar mensaje</button>
            </form>
        </section>

        <section class="container">
            <h3>Nuestra ubicación</h3>
            <div id="map">
                <!-- Aquí puedes insertar un mapa interactivo usando Google Maps o similar -->
                <img src="images/map-placeholder.jpg" alt="Mapa de ubicación" style="width: 100%; max-width: 600px;">
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>Inmobiliaria Elegante &copy; 2024</p>
            <p>Calle Principal 123, Ciudad Ejemplo, CP 12345</p>
            <p>Teléfono: (123) 456-7890 | Email: info@inmobiliariaelegante.com</p>
        </div>
    </footer>
</body>
</html>