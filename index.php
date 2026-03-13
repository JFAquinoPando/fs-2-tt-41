<?php
session_start();

$isLoggedIn = false;
$usuario = '';

if (isset($_SESSION['usuario'])) {
    $isLoggedIn = true;
    $usuario = $_SESSION['usuario'];
} elseif (isset($_COOKIE['usuario_logueado'])) {
    $isLoggedIn = true;
    $usuario = $_COOKIE['usuario_logueado'];
    $_SESSION['usuario'] = $usuario; // Refresh session
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .usar{
            background-color: rgb(44, 44, 44);
            color: whitesmoke;
        }
        .no-usar{
            background-color: rgb(154, 1, 1);
            color: whitesmoke;
        }
        .auth-bar {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: right;
        }
        .auth-bar a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="auth-bar">
        <?php if ($isLoggedIn): ?>
            Bienvenido, <?php echo htmlspecialchars($usuario); ?> | <a href="logout.php">Cerrar Sesión</a>
        <?php else: ?>
            <a href="login.php">Iniciar Sesión</a>
        <?php endif; ?>
    </div>

    <h1>Titulo 
        <?php
    
    for ($i=0; $i < 500; $i++) { 
        //echo $i."<br>";
        if ($i % 2 === 0) {
            $clase = "usar";
        }else{
            $clase = "no-usar";
        }
        echo "<span class='{$clase}'>{$i}</span><br>";
    }

    ?> </h1>
</body>
</html>