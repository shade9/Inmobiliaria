<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria Elegante - Inicio</title>
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
        <section class="hero">
            <div class="hero-content">
                <h1>Encuentra tu hogar ideal</h1>
                <p>Descubre las mejores propiedades en las ubicaciones más exclusivas</p>
                <a href="catalog.php" class="btn">Ver catálogo</a>
            </div>
        </section>

        <section class="featured-houses container">
            <h2>Propiedades destacadas</h2>
            <div class="house-grid">
                <?php
                $sql = "SELECT * FROM houses LIMIT 4";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="house-card">';
                        echo '<img src="images/' . $row["image"] . '" alt="' . $row["title"] . '">';
                        echo '<div class="house-info">';
                        echo '<h3>' . $row["title"] . '</h3>';
                        echo '<p>Habitaciones: ' . $row["bedrooms"] . '</p>';
                        echo '<p>Baños: ' . $row["bathrooms"] . '</p>';
                        echo '<p>Área: ' . $row["area"] . ' m²</p>';
                        echo '<p>Cochera: ' . $row["garage"] . '</p>';
                        echo '<p>Pisos: ' . $row["floors"] . '</p>';
                        echo '<p class="price">$' . number_format($row["price"], 2) . ' MXN</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
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