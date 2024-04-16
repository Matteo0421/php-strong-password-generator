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

<?php 
include_once __DIR__ . '/partials/head.php';
?>
<body>
    <h1 class="text-center text-white mt-4">Password generata:</h1>
    <h3 class="text-center mt-4"><?php echo $password_generata; ?></h3>
</body>
</html>

<style>
  body{
    background-color: rgb(192, 220, 192);
  }
</style>