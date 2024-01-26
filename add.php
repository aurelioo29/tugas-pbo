<?php 
  include "action.php";

  if (isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];

    $proses = new Proses();
    $proses->tambah_data($nama, $kelas, $nim, $alamat, $email, $hp);
    
    header('location:index.php');
  }