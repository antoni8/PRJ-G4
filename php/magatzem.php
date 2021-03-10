<html>
<head>

</head>
<body>

<?php

include 'esencial.php';
include 'classes/producte.php';

$productes = new Producte();
$productes = $productes->llistar();

echo "<table>";
echo "<tr><th>ID</th><th>Nom</th><th>Stock</th><th>Preu</th><th>Descompte</th><th>IVA</th></tr>";
foreach ($productes as $individual) {
    echo "<tr>";
    echo "<td>";
    echo $individual['ID'];
    echo "</td>";

    echo "<td>";
    echo $individual['Nom'];
    echo "</td>";

    echo "<td>";
    echo $individual['Stock'];
    echo "</td>";

    echo "<td>";
    echo $individual['Preu'];
    echo "</td>";

    echo "<td>";
    echo $individual['Descompte'];
    echo "</td>";

    echo "<td>";
    echo $individual['IVA'];
    echo "</td>";

    if ($_SESSION['rol'] == 'Editor' or $_SESSION['rol'] == 'Administrador') {
        echo "<td>";
        echo "<a href=''>Elimina el producte</a>";
        echo "</td>";
    }

    
    echo "</tr>";
}

echo "</table>";



?>

</body>
</html>