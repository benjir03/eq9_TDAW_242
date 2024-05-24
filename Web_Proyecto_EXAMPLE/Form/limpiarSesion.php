<?php
// Iniciar la sesión
session_start();

// Limpiar todas las variables de sesión
$_SESSION = array();

// Si se desea destruir completamente la sesión, borrar también la cookie de sesión.
// Esto destruirá la sesión, y no solo los datos de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión.
session_destroy();
echo "Sesión limpiada exitosamente";
?>
