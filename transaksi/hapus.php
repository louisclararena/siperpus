<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_perpus");

$id_pinjam = $_GET["id_pinjam"];

$query = mysqli_query($koneksi,
 "DELETE FROM detail_pinjam where id_pinjam=$id_pinjam");

$query1 = mysqli_query($koneksi,
 "DELETE FROM peminjaman where id_pinjam=$id_pinjam");

//var_dump($query);
if($query>0){
    echo " <script> alert('Data Berhasil dihapus'); document.location.href = 'index.php'; </script> ";
}
?>