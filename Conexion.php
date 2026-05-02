<?php
// Datos sacados de tu captura en Render
$host = "dpg-d7qnje7avr4c73f211c0-a"; // El Hostname que aparece arriba en tu imagen
$port = "5432";
$dbname = "mi_prueba_bd_1k7i";
$user = "admin";
$password = "8WrjOX6WJX9nrxLrwJSuZNDosDDg5KhG"; // Dale al ojo en Render para verla y pegarla aquí

try {
    // Para PostgreSQL usamos PDO, que es lo más seguro
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
    $pdo = new PDO($dsn);

    if ($pdo) {
        echo "¡Conexión exitosa a la base de datos de Render!";
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>