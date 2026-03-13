<?php
session_start();

// Destroy the session
session_destroy();

// Expire the cookie
setcookie('usuario_logueado', '', time() - 3600, "/");

header("Location: login.php");
exit;