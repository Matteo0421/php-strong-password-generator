<?php
session_start();

// Verifica se la password è stata generata nella sessione
if (isset($_SESSION['password_generata'])) {
    $password_generata = $_SESSION['password_generata'];
} else {
    // Se la password non è stata generata, reindirizza l'utente a index.php
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
</head>
<body>
    <h1>Password generata:</h1>
    <p><?php echo $password_generata; ?></p>
</body>
</html>
