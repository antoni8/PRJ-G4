<?php

class DB{
  protected $db;

  public function __construct(){
    $this->db = new mysqli(localhost,ppmyadmin,Hola,FACTURACIO);
    if (!$this->db) {
      echo "Ha hagut un error amb la base de dades";
    }
    return $this->db;
  }

}

 ?>
