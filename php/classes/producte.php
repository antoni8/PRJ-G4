<?php

class Producte extends DB{
    public function afegir($nom,$stock,$preu,$descompte,$iva){
        $inserir = "insert into producte (Nom,Stock,Preu,Descompte,IVA) values ('$nom',$stock,$preu,$descompte,$iva)";
        if ($this->db->query($inserir) == TRUE) {
            return "Nou producte inserit";
        } else {
            return "Error".$inserir."<br>".$this->db->error;
        }
    }

    public function borrar($id){
        $borrar = "delete from producte where ID = '$id'";
        if ($this->db->query($borrar) == TRUE) {
            return "Producte borrat";
        } else {
            return "Error".$this->db->error;
        }
    }

    public function editarStock($id,$nouStock){
        $canviar = "update producte set Stock = $nouStock where ID = $id";
        if ($this->db->query($canviar) == TRUE) {
            return "S'ha canviat l'stock";
        } else {
            return "Error".$this->db->error;
        }
    }

    public function llistar(){
        $llista = "select * from producte";
        $resultat = $this->db->query($llista);
        return $resultat;
    }

    public function getNom($id){
        $llista = "select Nom from producte where ID=$id";
        $resultat = $this->db->query($llista);
        return $resultat;
    }
}


?>