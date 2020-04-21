<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_perpus");

if(isset($_POST['simpan']))
{
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $penerbit= $_POST['penerbit'];
    $pengarang= $_POST['pengarang'];
    $ringkasan = $_POST['ringkasan'];
    $cover = $_POST['cover'];
    $stok= $_POST['stok'];
    $kategori= $_POST['kategori'];

 $sl = "UPDATE buku SET judul='$judul', penerbit='$penerbit', pengarang=' $pengarang',
     ringkasan='$ringkasan',cover='$cover', stok=$stok, id_kategori=$kategori where id_buku=$id_buku";
  $res = mysqli_query($koneksi,$sl);
  $count=mysqli_affected_rows($koneksi);
 if($count>0)
{
    echo
    "
    <script>
    alert('data berhasil di edit horeee!');
    document.location.href ='index.php';
    </script>
    ";
}
//var_dump(expression)
// else
// {
//     echo
//     "
//     <script>
//     alert('data berhasil di edit horeee!');
//     document.location.href ='index.php';
//     </script>
//     ";
// }
;
}

?>


