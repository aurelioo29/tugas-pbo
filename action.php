<!-- 
  Nama  : Aurelio Lucio Lie
  NIM   : 223303030427
  Kelas : 3 Malam A 
-->

<?php 
  include "db.php";

  class Proses extends database {
    public function __construct(){
      $this->conn = $this->koneksi();
    }

    public function tampil_data(){
      $sql = "SELECT * FROM mahasiswa";
      $bind = $this->conn->query($sql);
      while($obj = $bind->fetch_object()){
        $baris[] = $obj;
      }
      if(!empty($baris)){
        return $baris;
      }
    }

    public function tambah_data($nama, $kelas, $nim, $alamat, $email, $hp){
      $sql = "INSERT INTO mahasiswa (nama, kelas, nim, alamat, email, hp) VALUES ('$nama', '$kelas', '$nim', '$alamat', '$email', '$hp')";
      $this->conn->query($sql);
    }
    
    public function ubah($id){
      $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
      $bind = $this->conn->query($sql);
      while ($obj = $bind->fetch_object()){
        $baris = $obj;
      }
      return $baris;
    }

    public function ubah_data($id, $nama, $kelas, $nim, $alamat, $email, $hp){
      $sql = "UPDATE mahasiswa SET nama='$nama', kelas='$kelas', nim='$nim', alamat='$alamat', email='$email', hp='$hp' WHERE id='$id'";
      $this->conn->query($sql);
    }

    public function hapus($id){
      $sql = "DELETE FROM mahasiswa WHERE id='$id'";
      $this->conn->query($sql);
    }
  }