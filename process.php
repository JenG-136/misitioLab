<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del formulario BTS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <p>Gracias por unirte a la página de BTS</p>
        <font face="Comic Sans Ms, arial, verdana" size="7">"¡Tu Bias te espera!"</font>
    </header>

    <section id="fan-result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los valores enviados por el formulario
            $fan_name = htmlspecialchars($_POST['fan_name']);
            $fan_bias = htmlspecialchars($_POST['fan_bias']);

            // Arreglo de miembros con sus imágenes correspondientes
            $miembros = [
                'RM' => 'rm.jpeg',
                'Jin' => 'jin.jpeg',
                'Suga' => 'suga.jpeg',
                'J-Hope' => 'jhope.jpeg',
                'Jimin' => 'jimin.jpeg',
                'V' => 'v.jpeg',
                'Jungkook' => 'jk.jpeg'
            ];

            // Verificar si el bias seleccionado existe en el arreglo
            if (array_key_exists($fan_bias, $miembros)) {
                echo "<h2>¡Bienvenida, $fan_name!</h2>";
                echo "<p>Tu bias es $fan_bias</p>";
                echo "<img src='img/{$miembros[$fan_bias]}' alt='$fan_bias' width='150' height='200'>";
            } else {
                echo "<p>Error: Bias no encontrado.</p>";
            }
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Página sobre BTS - Yeni Elda Garcia Ramón - Creada con HTML, CSS y PHP</p>
    </footer>
</body>
</html>
