<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del ESP32-S2</title>
</head>
<body>
    <h1>Datos recibidos del ESP32-S2</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $json = file_get_contents('php://input'); // Leer datos JSON
        $data = json_decode($json, true); // Decodificar JSON

        if ($data) {
            echo "<p><strong>Temperatura:</strong> " . htmlspecialchars($data['temperatura']) . " °C</p>";
            echo "<p><strong>Humedad:</strong> " . htmlspecialchars($data['humedad']) . " %</p>";
        } else {
            echo "<p>No se recibieron datos válidos.</p>";
        }
    } else {
        echo "<p>Esperando datos del ESP32-S2...</p>";
    }
    ?>
</body>
</html>
