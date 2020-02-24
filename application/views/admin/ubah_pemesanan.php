<h1 class="text-center">UBAH PEMESANAN</h1>
<div class="col-md-8">
	<form>
		<div class="form-group">
			<label>Nama User</label>
			<input type="text" name="user" class="form-control" disabled="" value="<?php echo $pemesanan['username'] ?>">
		</div>
		<div class="form-group">
			<label>Nama Produk</label>
			<input type="text" name="user" class="form-control" disabled="" value="<?php echo $pemesanan['nama_produk'] ?>">
		</div>
		<div class="form-group">
			<label>Nama Invoice</label>
			<input type="text" name="user" class="form-control" disabled="" value="<?php echo $pemesanan['invoice'] ?>">
		</div>
		<div class="form-group">
			<label>Nama Jumlah</label>
			<input type="text" name="user" class="form-control" disabled="" value="<?php echo $pemesanan['jumlah'] ?>">
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