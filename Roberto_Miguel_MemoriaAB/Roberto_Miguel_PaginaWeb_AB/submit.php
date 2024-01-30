<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$host = "localhost";
$dbname = "miBD";
$user = "gabriela";
$password = "platanito23";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$nombre, $email, $mensaje]);

    echo "Mensaje enviado con éxito.";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>

