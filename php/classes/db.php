<?php

class DB{
  protected $db;

  public function __construct(){
    $this->db = new mysqli('localhost','phpmyadmin','Hola','FACTURACIO');
    return $this->db;
  }

}

 ?>
