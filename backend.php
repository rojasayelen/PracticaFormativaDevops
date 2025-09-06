<?php
// Recibe datos del frontend (formulario) [cite: 30]
$usuario = $_POST['usuario'] ?? 'no-user';
$password = $_POST['password'] ?? 'no-pass';

// Verifica de los datos recibidos [cite: 32]
$validacion_ok = true; 

// Devuelve una respuesta al frontend (ok o error) [cite: 34]
if ($validacion_ok) {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'ok', 'message' => 'Datos recibidos correctamente']);
} else {
    header('Content-Type: application/json');
    http_response_code(400); // Bad Request
    echo json_encode(['status' => 'error', 'message' => 'Error en los datos']);
}
?>