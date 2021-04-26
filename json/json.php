<?php
    require_once('koneksi.php');

    $query = "SELECT*FROM perpustakaan ";
    $sql   = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result,array(
            'id' => $row ['id'],
            'anggota' => $row ['anggota'],
            'penerbit' => $row ['penerbit'],
            'pengarang' => $row ['pengarang'],
            'buku' => $row ['buku'],
            'tahunterbit' => $row ['tahunterbit'],
            'petugas' => $row ['petugas'],
            'release_at' => $row ['release_at'],
        ) );
    }

    echo json_encode ( array('perpustakaan' => $result));
  }
?>