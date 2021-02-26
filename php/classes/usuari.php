<?php

session_start();
include 'db.php';

class Usuari extends DB{
  public function __construct(){
    parent::__construct();
  }

  public function comprovar($correu){
    $comprovacio = "select * from USUARI where Correu='$correu'";
    $resultatComprovacio = $this->db->query($comprovacio);
    $files = $resultatComprovacio->num_rows;
    if ($files == 0) {
      return 0;
    } else {
      return 1;
    }
  }

  public function login($correu,$contrasenya){
    $this->comprovar($correu);
    if ($this->comprovar($correu) == 0) {
      return 0;
      exit;
    }
    $contrasenya = md5($contrasenya);
    $conBD = "select DNI,Nom,Correu from USUARI where Correu='$correu' and Contrasenya='$contrasenya'";
    $resultatConBD = $this->db->query($conBD);
    $dades = $resultatConBD->fetch_assoc();

    $_SESSION['login'] = true;
    $_SESSION['id'] = $dades['DNI'];
    $_SESSION['nom'] = $dades['Nom'];
    $_SESSION['correu'] = $dades['Correu'];
  }

  public function registrar($DNI,$nom,$correu,$contrasenya,$empresa){
    if ($this->comprovar($correu) == 1) {
      exit;
    }
    $contrasenya = md5($contrasenya);
    $nou = "insert into USUARI (DNI,Nom,Correu,Contrasenya,NIF_Empresa) values ('$DNI','$nom','$correu','$contrasenya','$empresa')";
    if ($this->db->query($nou) == TRUE) {
      return "Nova linia inserida";
    } else {
      return "Error".$nou."<br>".$this->db->error;
    }
  }

}

 ?>
