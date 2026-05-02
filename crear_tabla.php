<?php
// PEGA AQUÍ TU URL EXTERNA COMPLETA ENTRE LAS COMILLAS
$url_externa = "postgresql://admin:8WrjOX6WJX9nrxLrwJSuZNDosDDg5KhG@dpg-d7qnje7avr4c73f211c0-a.oregon-postgres.render.com/mi_prueba_bd_1k7i"; 

// Este código divide la URL para sacar los datos automáticamente
$db_parts = parse_url($url_externa);

$host = $db_parts['host'];
$port = $db_parts['port'];
$user = $db_parts['user'];
$pass = $db_parts['pass'];
$dbname = ltrim($db_parts['path'], '/');

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$pass";
    $pdo = new PDO($dsn);

    // Creamos la tabla si no existe
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id SERIAL PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL
    )";

    $pdo->exec($sql);
    echo "<h1>¡Éxito total!</h1>";
    echo "<p>Tu base de datos en Render ya tiene la tabla 'usuarios' lista para el sistema de ventas.</p>";

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>