<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'agendalit');

try {
    $conn = new mysqli(HOST, USER, PASS, BASE);

    // Verifica a conexão
    if ($conn->connect_error) {
        throw new Exception("Falha ao se conectar: " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
?>
