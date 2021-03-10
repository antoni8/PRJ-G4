<?php

if ($_GET['error'] == 'correu'){
    header("Location: ../index.php?error=correu#login");
}

if ($_GET['error'] == 'contra'){
    header("Location: ../index.php?error2=contra#login");
}

?>