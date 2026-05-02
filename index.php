<?php
// Forzando detección de PHP
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto en la Web</title>
    <!-- Importamos una fuente moderna -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e1e2f 0%, #2d2d44 100%);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            padding: 2rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            max-width: 400px;
            width: 90%;
        }

        .profile-icon {
            font-size: 50px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #00d2ff;
        }

        p {
            font-size: 0.9rem;
            color: #ccc;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #00d2ff;
            color: #1e1e2f;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 210, 255, 0.3);
        }

        .status {
            margin-top: 20px;
            font-size: 0.8rem;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="profile-icon">🚀</div>
        <h1>¡Web Online!</h1>
        <p>Esta es mi primera prueba oficial desplegada en Netlify. El diseño está listo, lo siguiente será la conexión a datos.</p>
        
        <a href="#" class="btn" onclick="alert('¡Funciona el JS!')">Probar Botón</a>

        <div class="status">
            <small>Estado: <span style="color: #00ff88;">● En línea</span></small>
        </div>
    </div>

</body>
</html>
