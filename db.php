<?php

class DB{
  protected $db;

  public function __construct(){
    $this->db = new mysqli(nomServidor,nomUsuari,contrasenya,baseDades);
    if ($this->db->connect_error) {
      return "Ha hagut un error amb la base de dades".$this->db->connect_error;
    }
  }
}



 ?>
