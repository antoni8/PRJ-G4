<?php

include 'db.php';

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
        
    }
}

?>