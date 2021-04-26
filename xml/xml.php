<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "perpus") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');

$sql = "SELECT * FROM perpustakaan";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('perpus');
    $track->addChild('id', $row['id']);
    $track->addChild('anggota', $row['anggota']);
    $track->addChild('penerbit', $row['penerbit']);
    $track->addChild('pengarang', $row['pengarang']);
    $track->addChild('buku', $row['buku']);
    $track->addChild('tahunterbit', $row['tahunterbit']);
    $track->addChild('petugas', $row['petugas']);
   
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>
