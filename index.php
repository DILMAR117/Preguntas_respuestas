<!DOCTYPE html>
<html>
<head>
    <title>Preguntas y respuestas</title>
</head>
<body>
    <h1>Preguntas y respuestas</h1>

    <form action="procesar_respuestas.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="pregunta1">Pregunta 1: ¿Cuál es la capital de Francia?</label><br>
        <input type="text" id="pregunta1" name="respuestas[]" required><br><br>

        <label for="pregunta2">Pregunta 2: ¿Quién escribió "Don Quijote de la Mancha"?</label><br>
        <input type="text" id="pregunta2" name="respuestas[]" required><br><br>

        <label for="pregunta3">Pregunta 3: ¿Cómo se traduce en Inglés, "yo escribo un libro"?</label><br>
        <input type="text" id="pregunta3" name="respuestas[]" required><br><br>

        <label for="pregunta3">Pregunta 4: ¿Cuál es la herramienta más utilizada para el control de versionamiento?</label><br>
        <input type="text" id="pregunta3" name="respuestas[]" required><br><br>


        <input type="submit" value="Enviar respuestas">
    </form>
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
            text-align: center;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</html>
