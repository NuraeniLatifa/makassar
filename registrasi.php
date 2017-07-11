<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Create Account</h1>
			</div>
		</div>
		<form action="proses.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label col-md-3">Nama</label>
						<div class="col-md-9">
							<input type="text" name="nama" class="form-control" placeholder="Nama" required="" >
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Jenis Gedung</label>
						<div class="col-md-9">
							<select name="jg" class="form-control" required="">
								<option value=""> - Pilih - </option>
								<option value="Balai diklat">Balai Diklat</option>
								<option value="Gedung Serbaguna">Gedung Serbaguna</option>
							</select>
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Nama Gedung</label>
						<div class="col-md-9">
							<input type="text" name="ng" class="form-control" placeholder="Nama Gedung" required="">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Harga (Rp.)</label>
						<div class="col-md-9">
							<input type="number" name="hrg" min="0" class="form-control" placeholder="Harga Gedung" required="">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Deskripsi</label>
						<div class="col-md-9">
							<textarea class="form-control" placeholder="Deskripsi" name="desk" required=""></textarea>
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kontak</label>
						<div class="col-md-9">
							<input type="number" name="kontak" min="0" class="form-control" placeholder="Kontak" required="">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Gambar</label>
						<div class="col-md-9">
							<input type="file" name="gbr" class="form-control" required="">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Lokasi</label>
						<div class="col-md-9">
							<input type="text" name="lks" class="form-control" placeholder="Peta">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<div class="form-group">
							<input type="submit" class="form-control" name="reg" value="Registrasi">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>