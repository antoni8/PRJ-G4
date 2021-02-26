<?php

class DB{
  protected $db;

  const SERVIDOR = 'localhost';
  const USUARI = 'phpmyadmin';
  const CONTRASENYA = 'Hola';
  const BD = 'FACTURACIO';

  public function __construct(){
    $this->db = new mysqli(self::SERVIDOR,self::USUARI,self::CONTRASENYA,self::BD);
    return $this->db;
  }

}

 ?>
