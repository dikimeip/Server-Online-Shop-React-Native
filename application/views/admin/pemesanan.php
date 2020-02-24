<h1 class="text-center">PEMESANAN PAGE</h1>
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama User">
			</div>
		</form>
	</div>
</div>
<hr>
<table class="table table-hover" style="background-color: white">
	<tr>
		<th>NO</th>
		<th>NAMA PRODUK</th>
		<th>NAMA USER</th>
		<th>TANGGAL</th>
		<th>KETERANGAN</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($pemesanan as $pesan):?>
		<tr>
			<td><?php echo $nomer++ ?></td>
			<td><?php echo $pesan['nama_produk'] ?></td>
			<td><?php echo $pesan['username'] ?></td>
			<td><?php echo $pesan['tanggal'] ?></td>
			<td><?php echo $pesan['status_kirim'] ?></td>
			<td>
				<a href="" class="btn btn-warning btn-sm">UBAH</a>
				<a href="" class="btn btn-info btn-sm">DETAIL</a>
				<a href="" class="btn btn-danger btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>