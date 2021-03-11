<?php

include 'esencial.php';
include 'classes/factura.php';
include 'classes/liniafactura.php';

$factures = new Factura();
$factures = $factures->llistarFactures($_SESSION['nif']);
echo "<html>
<head>
<meta charset='utf-8'/>
<meta http-equiv='X-UA-Compatible' content='IE=edge'/>
<title>A&sup2; - Benviguts a la nostra aplicació</title>
<link rel='shortcut icon' href='../fotos/logo.png'>
<link rel='stylesheet' type='text/css' href='../css/selectfactura.css'/>
</head>
<body>";
echo "<table>";
    
    foreach ($factures as $factura) {
        echo "<tr><th>ID</th><th>Data</th><th>Preu Total</th></tr>";
        echo "<tr>";
        echo "<td>";
        echo $factura['ID'];
        echo "</td>";

        echo "<td>";
        echo $factura['Data'];
        echo "</td>";

        echo "<td>";
        echo $factura['PreuTotal'];
        echo "</td>";

        echo "<td>";
        echo "<a href=''>Elimina la factura</a><br>";
        echo "<a href=''>Edita la factura</a>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";

        echo "<tr><th>ID</th><th>ID Producte</th><th>Nom</th><th>Quantitat</th><th>Preu</th></tr>";

        $linia = new LiniaFactura();
        $linia = $linia->llistarLiniesFactura($factura['ID']);
        
        foreach ($linia as $individual) {
            echo "<tr style='border-bottom:solid black';>";

            echo "<td>";
            echo $individual['ID'];
            echo "</td>";

            echo "<td>";
            echo $individual['ID_Producte'];
            echo "</td>";

            echo "<td>";
            echo $individual['Nom'];
            echo "</td>";

            echo "<td>";
            echo $individual['Quantitat'];
            echo "</td>";

            echo "<td>";
            echo $individual['PreuTotal'];
            echo "</td>";
            echo "</tr>";

        }

        echo "</tr>";

        
    }

    echo "</table>";
echo "
</body>
</html>";
?>
