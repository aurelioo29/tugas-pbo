<?php

class database{
  public function koneksi(){
    $host     = "localhost";
    $username = "root";
    $password = "";
    $database = "crud_uas";

    $connect = new mysqli($host, $username, $password, $database);

    return $connect;
  }
}