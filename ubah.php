<?php 
  include "action.php";

  if (isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];

    $proses = new Proses();
    $proses->ubah_data($id, $nama, $kelas, $nim, $alamat, $email, $hp);
    
    header('location:index.php');
  }