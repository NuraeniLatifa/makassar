<!DOCTYPE html>
<html lang="en">

<head>

    <title> User</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Data Pemilik Balai</h1>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-md-12">
		<form>
			<div class="form-group">
				<label>ID Pengguna</label>
				<input type="text" name="id" placeholder="ID Pengguna" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Nama Pemilik</label>
				<input type="text" name="nama-pemilik" placeholder="Nama Pemilik" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Nama Balai</label>
				<input type="text" name="nama-balai" placeholder="Nama Balai" class="form-control">
			</div>
			<div class="form-group">
				<label>Harga Balai</label>
				<input type="number" name="harga" placeholder="Harga (Rp.)" class="form-control">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea class="form-control" name="desk" placeholder="Deskripsi"></textarea>
			</div>
			<div class="form-group">
				<label>Kontak</label>
				<input type="number" name="cp" placeholder="Kontak" class="form-control">
			</div>
			<div class="form-group">
				<label>Gambar</label>
				<input type="file" name="gambar"  >
			</div>
			<div class="form-group">
				<label>Lokasi</label>
				<div class="form-control">
					map
				</div>
			</div>
			<button type="submit" class="btn btn-primary"> Simpan</button>
		</form>
	</div>
</div>

<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
