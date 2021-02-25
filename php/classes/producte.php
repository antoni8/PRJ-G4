<?php

include 'db.php';

class Producte extends DB{
    public function __construct(){
        parent::__construct();
    }

    public function afegir($nom,$stock,$preu,$descompte,$iva){
        $inserir = "insert into PRODUCTE (Nom,Stock,Preu,Descompte,IVA) values ('$nom',$stock,$preu,$descompte,$iva)";
        if ($this->db->query($inserir) == TRUE) {
            echo "Nou producte inserit";
        } else {
            echo "Error".$inserir."<br>".$this->db->error;
        }
    }

    public function borrar($id){
        $borrar = "delete from PRODUCTE where ID = '$id'";
        if ($this->db->query($borrar) == TRUE) {
            echo "Producte borrat";
        } else {
            echo "Error".$this->db->error;
        }
    }

    public function editarStock(){
        
    }

    public function llistar(){

    }
}


?>