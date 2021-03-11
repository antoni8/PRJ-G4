<?php

class Factura extends DB{
    public function novaFactura($data,$NIF){
        $inserir = "insert into FACTURA (Data,NIF_Empresa) values ('$data','$NIF')";
        if ($this->db->query($inserir) == TRUE) {
            return "Factura inserida";
        } else {
            return "Error".$this->db->error;
        }
    }

    public function borrarFactura($id){
        $eliminaLiniaFactura = "delete from linia_factura where ID_Factura = $id";
        $eliminarFactura = "delete from factura where ID = $id";
        $this->db->query($eliminaLiniaFactura);
        $this->db->query($eliminarFactura);
    }

    public function llistarFactures($nif){
        $factures = "select ID,Data,PreuTotal from factura where NIF_Empresa='$nif'";
        $factures = $this->db->query($factures);
        return $factures;
    }
}

?>