<?php
function genera_password($lunghezza) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
    $lunghezza_caratteri = strlen($caratteri);
    $password = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $caratteri[rand(0, $lunghezza_caratteri - 1)];
    }

    return $password;
}

$password_generata = '';
if (isset($_GET['password'])) {
    $lunghezza_password = intval($_GET['password']);
    if ($lunghezza_password > 0) {
        $password_generata = genera_password($lunghezza_password);
    }
}
?>