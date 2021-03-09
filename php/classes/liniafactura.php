<?php

class LiniaFactura extends DB{
    public function llistarLiniesFactura($id){
        $llistar = "select f.ID_Factura,f.ID,f.ID_Producte,p.Nom,f.Quantitat,f.PreuTotal from linia_factura f join producte p on f.ID_Producte = p.ID where f.ID_Factura = $id";
        $llistar = $this->db->query($llistar);
        return $llistar;
    }
}

?>