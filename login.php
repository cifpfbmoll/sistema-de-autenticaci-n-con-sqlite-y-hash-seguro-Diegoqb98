<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #2196F3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0b7dda;
        }
        .message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            text-align: center;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .links {
            text-align: center;
            margin-top: 20px;
        }
        .links a {
            color: #2196F3;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inicio de Sesión</h2>
        
        <?php
        session_start();
        include('conexion.php');

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario = trim($_POST["usuario"]);
            $clave = $_POST["clave"];

            if (empty($usuario) || empty($clave)) {
                echo '<div class="message error">Por favor, completa todos los campos.</div>';
            } else {
                try {
                    $db = conectar();
                    $stmt = $db->prepare("SELECT id, password FROM usuarios WHERE usuario = ?");
                    $stmt->execute([$usuario]);
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    if ($row && password_verify($clave, $row["password"])) {
                        $_SESSION['usuario_id'] = $row['id'];
                        $_SESSION['usuario'] = $usuario;
                        echo '<div class="message success">¡Inicio de sesión correcto! Bienvenido, ' . htmlspecialchars($usuario) . '.</div>';
                    } else {
                        echo '<div class="message error">Usuario o contraseña incorrectos.</div>';
                    }
                } catch (PDOException $e) {
                    echo '<div class="message error">Error: ' . $e->getMessage() . '</div>';
                }
            }
        }
        ?>

        <form method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            
            <label for="clave">Contraseña:</label>
            <input type="password" id="clave" name="clave" required>
            
            <button type="submit">Ingresar</button>
        </form>
        
        <div class="links">
            <a href="index.php">Volver al inicio</a> | 
            <a href="registro.php">Registrarse</a>
        </div>
    </div>
</body>
</html>
