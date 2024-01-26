<!-- 
  Nama  : Aurelio Lucio Lie
  NIM   : 223303030427
  Kelas : 3 Malam A 
-->

<?php 
  include "action.php";

  if (isset($_GET['id'])){
    $id = $_GET['id'];
    
    $proses = new Proses();
    $proses->hapus($id);
    
    header('location:index.php');
  }