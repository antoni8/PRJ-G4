<?php

include 'db.php';

class Producte extends DB{
    public function __construct(){
        parent::__construct();
    }

    public function afegir($nom,$stock,$preu,$descompte,$iva){
        $inserir = "insert into PRODUCTE (Nom,Stock,Preu,Descompte,IVA) values ('$nom',$stock,$preu,$descompte,$iva)";
        if ($this->db->query($inserir) == TRUE) {
            return "Nou producte inserit";
        } else {
            return "Error".$inserir."<br>".$this->db->error;
        }
    }

    public function borrar($id){
        $borrar = "delete from PRODUCTE where ID = '$id'";
        if ($this->db->query($borrar) == TRUE) {
            return "Producte borrat";
        } else {
            return "Error".$this->db->error;
        }
    }

    public function editarStock($id,$nouStock){
        $canviar = "update PRODUCTE set Stock = $nouStock where ID = $id";
        if ($this->db->query($canviar) == TRUE) {
            return "S'ha canviat l'stock";
        } else {
            return "Error".$this->db->error;
        }
    }

    public function llistar(){
        $llista = "select * from PRODUCTE";
        $resultat = $this->db->query($llista);
        return $resultat;
    }
}


?>