<?php

class Usuari extends DB{
  private $db;

  public function __construct(){
    $this->db = new DB();
  }

  public function comprovar($correu){
    $comprovacio = "select * from usuari where correu='$correu'";
    $resultatComprovacio = $this->db->query($comprovacio);
    $files = $resultatComprovacio->num_rows;
    if ($files == 0) {
      return "No existeix un usuari amb aquest correu assigant";
      exit;
    }
  }

  public function login($correu,$contrasenya){
    comprovar($correu);
    $contrasenya = md5($contrasenya);
    $conBD = "select idUsuari from usuari where correu='$correu' and contrasenya='$contrasenya'";
    $resultatConBD = $this->db->query($conBD);
  }

  public function registrar($nom,$usuari,$correu,$contrasenya){
    comprovar($correu);

    $contrasenya = md5($contrasenya);
    $nou = "insert into usuaris ";
    $resultatNou = $this->db->query($nou);
  }

}

 ?>
