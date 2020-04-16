<?php  
include '../koneksi.php';
include '../aset/header.php';
$id_anggota = $_GET['id_anggota'];
$sql = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota=$id_anggota");

$query = "SELECT * FROM anggota a INNER JOIN level l ON a.id_level=l.id_level WHERE id_anggota=$id_anggota";
$res = mysqli_query($koneksi, $query);
$level = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Anggota</title>
</head>
<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h2><i class="fas fa-user-plus"></i>Edit Data Anggota</h2>
          </div>
          <div class="card-body">
            <form method="post" action="proses-edit.php">
              <table class="table">
                <?php  
                while ($anggota = mysqli_fetch_assoc($sql)):
                ?>
              <tr>
                <input type="hidden" name="id_anggota" value="<?php echo $anggota['id_anggota'];?>">
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $anggota['nama'];?>" required></td>
              </tr>
              <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $anggota['kelas'];?>" required></td>
              </tr>
              <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp" value="<?php echo $anggota['telp'];?>" required></td>
              </tr>
              <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $anggota['username'];?>" required></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $anggota['password'];?>" required></td>
              </tr>
              <?php  
              endwhile;
              ?>
              <tr>
                <td>Level</td>
                <td><input type="text" name="id_level" value="<?php echo $level['id_level'];?>" required></td>
              </tr>
              <tr>
                <td class="text-rigth" colspan="2">
                  <a href="indexanggota.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>
                </td>
                <td></td>
                <td><input type="submit" class="btn btn-primary" name="simpan" value="simpan"></td>
              </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php  
include '../aset/footer.php';
?>