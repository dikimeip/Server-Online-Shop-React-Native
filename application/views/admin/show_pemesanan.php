<h1 class="text-center">DETAIL PEMESANAN</h1>
<div class="col-md-8" style="background-color: white">
	<p><b>NAMA PEMESAN</b></p>
	<p><?php echo $pemesanan['username'] ?></p>
	<p><b>NAMA EMAIL</b></p>
	<p><?php echo $pemesanan['email'] ?></p>
	<p><b>NAMA NO HP </b></p>
	<p><?php echo $pemesanan['no_hp'] ?></p>
	<p><b>NAMA ALAMAT</b></p>
	<p><?php echo $pemesanan['alamat'] ?></p>
	<p><b>NAMA PRODUK</b></p>
	<p><?php echo $pemesanan['nama_produk'] ?></p>
	<p><b>TANGGAL PEMESANAN</b></p>
	<p><?php echo $pemesanan['tanggal'] ?></p>
	<p><b>STATUS PENGIRIMAN</b></p>
	<p><?php echo $pemesanan['status_kirim'] ?></p>
	<p><b>INVOICE</b></p>
	<p><?php echo $pemesanan['invoice'] ?></p>
	<p><b>JUMLAH</b></p>
	<p><?php echo $pemesanan['jumlah'] ?></p>
	<p><b>TOTAL</b></p>
	<p><?php echo($pemesanan['jumlah'] * $pemesanan['total'])  ?></p>
</div>