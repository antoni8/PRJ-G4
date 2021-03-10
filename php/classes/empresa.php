<?php

class Empresa extends DB{
    public function afegir($NIF,$nom,$adreça,$telefon){
        $inserir = "insert into EMPRESA (NIF,Nom,Adreça,Telèfon) values ('$NIF','$nom','$adreça','$telefon')";
        if ($this->db->query($inserir) == TRUE) {
            return "S'ha inserit la empresa";
        } else {
            return "Error".$this->db->error;
        }
    }

    public function borrar($NIF){
        $borrar = "delete from EMPRESA where NIF = '$NIF'";
        if ($this->db->query($borrar) == TRUE) {
            return "Empresa borrada";
        } else {
            return "Error".$this->db->error;
        }
    }
}

?>