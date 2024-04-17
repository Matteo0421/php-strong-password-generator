<?php

session_start(); 

function genera_password($lunghezza) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
    $lunghezza_caratteri = strlen($caratteri);
    $password = '';

    $lunghezza = min($lunghezza, 30);

    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $caratteri[rand(0, $lunghezza_caratteri - 1)];
    }

    return $password;
}

// Controlla se è stata generata una password nella sessione corrente
if (isset($_SESSION['password_generata'])) {
    $password_generata = $_SESSION['password_generata'];
} else {
    $password_generata = '';
}

if (isset($_GET['password'])) {
    $lunghezza_password = intval($_GET['password']);
    if ($lunghezza_password > 0) {
        // Genera una password solo se non è stata già generata nella sessione
        if (empty($password_generata)) {
            $password_generata = genera_password($lunghezza_password);
            $_SESSION['password_generata'] = $password_generata; // Memorizza la password nella sessione
        }
        // Reindirizza l'utente 
        header("Location: show_password.php");
    }
}
?>
