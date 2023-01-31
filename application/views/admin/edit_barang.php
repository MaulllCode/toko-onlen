<div class="container fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
	<?php foreach ($barang as $brg) : ?>

		<form action="<?php echo base_url() . 'admin/data_barang/update' ?>" method="post">
		<div class="form-group">
			<label for="">Nama Barang</label>
			<input type="text" class="form-control" name="nama_brg" value="<?php echo $brg->nama_brg ?>">
		</div>
		<div class="form-group">
			<label for="">Keterangan</label>
			<input type="hidden" class="form-control" name="id_brg" value="<?php echo $brg->id_brg ?>">
			<input type="text" class="form-control" name="keterangan" value="<?php echo $brg->keterangan ?>">
		</div>
		<div class="form-group">
			<label for="">Kategori</label>
			<input type="text" class="form-control" name="kategori" value="<?php echo $brg->kategori ?>">
		</div>
		<div class="form-group">
			<label for="">Harga</label>
			<input type="text" class="form-control" name="harga" value="<?php echo $brg->harga ?>">
		</div>
		<div class="form-group">
			<label for="">Stok</label>
			<input type="text" class="form-control" name="stok" value="<?php echo $brg->stok ?>">
		</div>
		<button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>
		</form>

	<?php endforeach; ?>
</div>
