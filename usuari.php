<?php

class Usuari extends DB{
  private $db;

  public function __construct(){
    $this->db = getDB();
  }

  public function login($correu,$contrasenya){
    // Comprovar si l'usuari existeix
    $comprovacio = "select * from usuari where correu='$correu'";
    $resultatComprovacio = $this->db->query($comprovacio);
    $files = $resultatComprovacio->num_rows;
    if ($files == 0) {
      return "No existeix un usuari amb aquest correu assigant";
      exit;
    }

    $contrasenya = md5($contrasenya);
    $conBD = "select idUsuari from usuari where correu='$correu' and contrasenya='$contrasenya'";
    $resultatConBD = $this->db->query($conBD);
    $files = $resultatComprovacio->num_rows;
  }



}

 ?>
