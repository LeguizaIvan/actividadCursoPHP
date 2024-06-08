<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página actividad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="principio";>
        <?php 
        // Constantes 
        define("SALUDO", "Bienvenido a mi proyecto");
        define("FOOTER", "Realizado por Iván Leguiza");
        echo "<p>" . SALUDO . "</p>";
        ?>
    </div>

    <div class="contenido";>
        <?php 
            // Declarar variables
            $nombre = "Iván";
            $edad = 10;
            $mensaje = "";

            // Uso de Operador
            if ($edad >= 18) {
                $mensaje = "Sos mayor";
            } else {
                $mensaje = "Sos menor";
            };

            // Contenido del sitio
            echo "<p> Nombre: " . $nombre . "</p>";
            echo "<p> Edad: " . $edad . "</p>";
            echo "<p>" . $mensaje . "</p>";

        ?>
    </div>

    <div class="footer";>
        <?php 
            echo "<p>" . FOOTER . "</p>";
        ?>
    </div>
</body>
</html>