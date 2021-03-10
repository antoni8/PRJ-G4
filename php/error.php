<?php

// errors del login
if ($_GET['error'] == 'correu'){
    header("Location: ../index.php?error=correu#login");
}

if ($_GET['error'] == 'contra'){
    header("Location: ../index.php?error2=contra#login");
}

// errors del registre
if ($_GET['error2'] == 'dni') {
    //header("Location: ../index.php?dni=dni#registrar");
    echo "joder";
}

if ($_GET['error2'] == 'correu2') {
    header("Location: ../index.php?correu=correu#registrar");
}

if ($_GET['error2'] == 'contra2') {
    //header("Location: ../index.php?contra=contra#registrar");
    echo "hola";
}

?>