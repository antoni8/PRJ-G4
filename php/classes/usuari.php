<?php

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
    $conBD = "select DNI,Nom,Correu,Rol,NIF_Empresa from usuari where Correu='$correu' and Contrasenya='$contrasenya'";
    $resultatConBD = $this->db->query($conBD);
    if ($resultatConBD->num_rows == 0) {
      return 2;
    }
    $dades = $resultatConBD->fetch_assoc();
    var_dump($dades);
    $_SESSION['login'] = true;
    $_SESSION['id'] = $dades['DNI'];
    $_SESSION['nom'] = $dades['Nom'];
    $_SESSION['correu'] = $dades['Correu'];
    $_SESSION['rol'] = $dades['Rol'];
    $_SESSION['nif'] = $dades['NIF_Empresa'];
    return 1;
  }

  public function registrar($DNI,$nom,$correu,$contrasenya,$empresa){
    if ($this->comprovar($correu) == 1) {
      return 0;
    }
    $dni = "select DNI from usuari where DNI='$DNI'";
    $dni = $this->db->query($dni);
    if ($dni->num_rows == 1) {
      return 3;
    }
    $contrasenya_enc = md5($contrasenya);
    $nou = "insert into usuari (DNI,Nom,Correu,Contrasenya,NIF_Empresa) values ('$DNI','$nom','$correu','$contrasenya_enc','$empresa')";
    if ($this->db->query($nou) == TRUE) {
      return 1;
    }
  }

  public function perfil($dni){
    $info = "select u.DNI,u.Nom,u.Correu,u.Rol,e.Nom as 'NomE' from usuari u join empresa e on u.NIF_EMPRESA = e.NIF where u.DNI='$dni'";
    $info = $this->db->query($info);
    $info = $info->fetch_assoc();
    return $info;
  }

  public function canviaContra($dni,$novaContra){
    $antigaContra = "select Contrasenya from usuari where DNI='$dni'";
    $antigaContra = $this->db->query($antigaContra);
    $antigaContra = $antigaContra->fetch_assoc();
    $antigaContra = $antigaContra['Contrasenya'];
    $novaContra = md5($novaContra);
    
    if ($antigaContra == $novaContra) {
      return false;
    } else {
      $canviar = "update usuari set Contrasenya = '$novaContra' where DNI='$dni'";
      if ($this->db->query($canviar) == TRUE) {
        return "S'ha canviat la contrasenya";
      } else {
        return "Error".$this->db->error;
      }
    }
  }

  public function comprovarContra($dni,$contrasenya){
    $contraBD = "select Contrasenya from usuari where DNI='$dni'";
    $contraBD = $this->db->query($contraBD);
    $contraBD = $contraBD->fetch_assoc();
    $contraBD = $contraBD['Contrasenya'];
    $contrasenya = md5($contrasenya);
    
    if ($contraBD == $contrasenya) {
      return true;
    }
  }

  public function llistar(){
    $llistar = "select * from usuari where Rol != 'Administrador' or Rol is null";
    $llistar = $this->db->query($llistar);
    return $llistar;
  }

}

 ?>
