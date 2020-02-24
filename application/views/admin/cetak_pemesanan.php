<!DOCTYPE html>
<html>
<head>
	<title>Cetak Pemesanan</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body onload="window.print()">
<div class="container">
	<h1 class="text-center">CETAK PEMESANAN</h1>
	<br>
	<table class="table table-hover" style="background-color: white">
		<tr>
			<th>NO</th>
			<th>NAMA PRODUK</th>
			<th>NAMA USER</th>
			<th>TANGGAL</th>
			<th>KETERANGAN</th>
		</tr>
		<?php foreach ($pemesanan as $pesan):?>
			<tr>
				<td><?php echo $nomer++ ?></td>
				<td><?php echo $pesan['nama_produk'] ?></td>
				<td><?php echo $pesan['username'] ?></td>
				<td><?php echo $pesan['tanggal'] ?></td>
				<td><?php echo $pesan['status_kirim'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>
	<p>TANGGAL CETAK = <?php echo date('d-m-y') ?> </p>
</div>
</body>
</html>