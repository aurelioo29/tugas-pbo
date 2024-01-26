<!-- 
  Nama  : Aurelio Lucio Lie
  NIM   : 223303030427
  Kelas : 3 Malam A 
-->

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