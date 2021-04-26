<?php 
   require_once('koneksi.php');

   $anggota = $_POST['anggota'];
   $penerbit = $_POST['penerbit'];
   $pengarang = $_POST['pengarang'];
   $buku = $_POST['buku'];
   $tahunterbit = $_POST['tahunterbit'];
   $petugas = $_POST['petugas'];

   $query = "INSERT INTO perpustakaan(anggota,penerbit,pengarang,buku,tahunterbit,petugas)VALUES('$anggota, '$penerbit', '$pengarang', '$buku', '$tahunterbit', '$petugas')";

   $sql    = mysqli_query($db_connect, $query);

  if ($sql){
    echo json_encode ( array('message' => 'created!') );
  }else {
    echo json_encode ( array('message' => 'created!') );
  }
  
?>
