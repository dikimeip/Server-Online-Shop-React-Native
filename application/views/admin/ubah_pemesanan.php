<h1 class="text-center">UBAH PEMESANAN</h1>
<div class="col-md-8">
	<form action="<?php echo base_url('PemesananController/pemesanan_putData') ?>" method="post">
		<div class="form-group"> 
			<label>Nama User</label>
			<input type="text" name="id_user" class="form-control" disabled="" value="<?php echo $pemesanan['username'] ?>">
			<input type="hidden" name="id_pemesanan" class="form-control" value="<?php echo $pemesanan['id_pemesanan'] ?>">
		</div>
		<div class="form-group">
			<label>Nama Produk</label>
			<input type="text" name="nama_produk" class="form-control" disabled="" value="<?php echo $pemesanan['nama_produk'] ?>">
		</div>
		<div class="form-group">
			<label>Nama Invoice</label>
			<input type="text" name="invoice" class="form-control" disabled="" value="<?php echo $pemesanan['invoice'] ?>">
		</div>
		<div class="form-group">
			<label>Nama Jumlah</label>
			<input type="text" name="jumlah" class="form-control" disabled="" value="<?php echo $pemesanan['jumlah'] ?>">
		</div>
		<div class="form-group">
			<label>Status Pengiriman</label>
			<select class="form-control" name="status">
				<option><?php echo $pemesanan['status_kirim'] ?></option>
				<option>LUNAS || PROSES PACKING</option>
				<option>LUNAS || PROSES PENGIRIMAN</option>
				<option>LUNAS || TERIKIRIM</option>
			</select>
		</div>
		<input type="submit" name="simpan" value="UBAH" class="btn btn-info">
	</form>
</div>