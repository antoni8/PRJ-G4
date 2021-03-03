<?php

session_start();
include 'db.php';

class Usuari extends DB{
  public function comprovar($correu){
    $comprovacio = "select * from usuari where Correu='$correu'";
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
    $conBD = "select DNI,Nom,Correu from usuari where Correu='$correu' and Contrasenya='$contrasenya'";
    $resultatConBD = $this->db->query($conBD);
    $dades = $resultatConBD->fetch_assoc();

    $_SESSION['login'] = true;
    $_SESSION['id'] = $dades['DNI'];
    $_SESSION['nom'] = $dades['Nom'];
    $_SESSION['correu'] = $dades['Correu'];
  }

  public function registrar($DNI,$nom,$correu,$contrasenya,$empresa){
    if ($this->comprovar($correu) == 1) {
      return 0;
      exit;
    }
    $contrasenya = md5($contrasenya);
    $nou = "insert into usuari (DNI,Nom,Correu,Contrasenya,NIF_Empresa) values ('$DNI','$nom','$correu','$contrasenya','$empresa')";
    if ($this->db->query($nou) == TRUE) {
      return "Nova linia inserida";
    } else {
      return "Error".$nou."<br>".$this->db->error;
    }
  }

  public function perfil($dni){
    $info = "select u.DNI,u.Nom,u.Correu,u.Rol,e.Nom as 'NomE' from usuari u join empresa e on u.NIF_EMPRESA = e.NIF where u.DNI='$dni'";
    $info = $this->db->query($info);
    $info = $info->fetch_assoc();
    return $info;
  }

}

 ?>
