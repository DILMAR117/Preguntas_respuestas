<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados Obtenidos</h1>

    <?php
    $respuestasCorrectas = array('París', 'Miguel de Cervantes', 'i write a book', 'Git');
    $respuestasUsuario = $_POST['respuestas'];

    $puntuacion = 0;

    for ($i = 0; $i < count($respuestasCorrectas); $i++) {
        echo "<p>Pregunta ".($i+1).": Tu respuesta: ".$respuestasUsuario[$i]."</p>";

        if (strtolower($respuestasUsuario[$i]) == strtolower($respuestasCorrectas[$i])) {
            echo "<p class='respuesta-correcta'>Respuesta correcta.</p>";
            $puntuacion++;
        } else {
            echo "<p class='respuesta-incorrecta'>Respuesta incorrecta. La respuesta correcta es: ".$respuestasCorrectas[$i]."</p>";
        }
    }

    echo "<h2 class='puntuacion'>Puntuación: ".$puntuacion."/".count($respuestasCorrectas)."</h2>";
    ?>
</body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        .respuesta-correcta {
            color: #008000;
        }

        .respuesta-incorrecta {
            color: #ff0000;
        }

        .puntuacion {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</html>
