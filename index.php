<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Autenticación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 10px;
        }
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }
        .info-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }
        .info-box h3 {
            margin-top: 0;
            color: #667eea;
        }
        .info-box ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        .button-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }
        .btn {
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            transition: transform 0.2s;
            display: inline-block;
        }
        .btn:hover {
            transform: translateY(-2px);
        }
        .btn-primary {
            background-color: #4CAF50;
            color: white;
        }
        .btn-secondary {
            background-color: #2196F3;
            color: white;
        }
        .setup-box {
            background-color: #fff3cd;
            padding: 15px;
            border-radius: 6px;
            margin-top: 20px;
            border-left: 4px solid #ffc107;
        }
        .setup-box h4 {
            margin-top: 0;
            color: #856404;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔐 Sistema de Autenticación</h1>
        <p class="subtitle">SQLite + PHP + Hash Seguro</p>
        
        <div class="info-box">
            <h3>Características del Sistema</h3>
            <ul>
                <li>✅ Almacenamiento seguro con <code>password_hash()</code></li>
                <li>✅ Verificación con <code>password_verify()</code></li>
                <li>✅ Base de datos SQLite (sin MySQL requerido)</li>
                <li>✅ Protección contra inyección SQL con PDO</li>
                <li>✅ Salt aleatorio automático</li>
            </ul>
        </div>

        <div class="setup-box">
            <h4>⚠️ Primera vez - Configuración</h4>
            <p>Si es la primera vez que ejecutas el proyecto, accede a <code>crear_tabla.php</code> para inicializar la base de datos.</p>
        </div>

        <div class="button-container">
            <a href="registro.php" class="btn btn-primary">📝 Registrarse</a>
            <a href="login.php" class="btn btn-secondary">🔑 Iniciar Sesión</a>
        </div>

        <div class="info-box" style="margin-top: 30px;">
            <h3>📚 Documentación Técnica</h3>
            <p>Este proyecto demuestra las mejores prácticas para autenticación segura en PHP:</p>
            <ul>
                <li><strong>password_hash():</strong> Genera un hash bcrypt con salt aleatorio</li>
                <li><strong>password_verify():</strong> Compara contraseñas de forma segura</li>
                <li><strong>PDO:</strong> Previene inyección SQL con consultas preparadas</li>
                <li><strong>SQLite:</strong> Base de datos embebida sin servidor externo</li>
            </ul>
        </div>
    </div>
</body>
</html>
