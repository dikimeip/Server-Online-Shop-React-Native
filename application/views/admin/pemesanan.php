<h1 class="text-center">PEMESANAN PAGE</h1>
<div class="row">
	<div class="col-md-8">
		<a target="_BLANK" href="<?php echo base_url() ?>PemesananController/pemesanan_cetak" class="btn btn-success btn-sm">CETAK</a>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama User">
			</div>
		</form>
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success">
		<p class="text-center"><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>

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
				<a href="<?php echo base_url() ?>PemesananController/pemesanan_put/<?php echo $pesan['id_pemesanan'] ?>" class="btn btn-warning btn-sm">UBAH</a>
				<a href="<?php echo base_url() ?>PemesananController/pemesanan_show/<?php echo $pesan['id_pemesanan'] ?>" class="btn btn-info btn-sm">DETAIL</a>
				<a onclick="return confirm('hapus data..?')" href="<?php echo base_url() ?>PemesananController/pemesanan_delete/<?php echo $pesan['id_pemesanan'] ?>" class="btn btn-danger btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
