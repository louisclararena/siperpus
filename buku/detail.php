<?php  
include '../aset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku a INNER JOIN level l ON a.id_kategori=l.id_kategori WHERE id_buku=$id_buku";
$res = mysqli_query($koneksi, $sql);

$detail = mysqli_fetch_assoc($res);
 //var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Buku</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Buku</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
				<tr>
					<td><strong>Judul</strong></td>
					<td><?=$detail['judul'];?></td>
				</tr>
				<tr>
					<td><strong>Penggarang</strong></td>
					<td><?=$detail['penggrang']?></td>
				</tr>
				<tr>
					<td><strong>Aksi</strong></td>
					<td><?=$detail['aksi']?></td>
				</tr>
				
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php  
include '../aset/footer.php';
?>