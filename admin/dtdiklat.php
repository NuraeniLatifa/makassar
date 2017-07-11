<!DOCTYPE html>
<html>
<head>
	<title>dt balai</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  
	<div class="col-md-9">
	   <input type="button" name="sd" value=Tambah class=" btn btn-default"> </input>
	   <br>
	   <br>
		<table class="table">
			<tr>
				<td>Keterangan</td>
				<td></td>
				<td align="right">Aksi</td>
			</tr>
			<tr>
				<td>Nama Balai :</td>
				<td><?php echo $nilai['nama_balai']; ?></td>
				<td align="right">
					<input type="button" name="sd" value="edit" class=" btn btn-default">
					<input type="button" name="sd" value="save" class=" btn btn-default">
				</td>
			</tr>
			<tr>
				<td>harga :</td>
				<td><?php echo 'Rp.'.$nilai['hrg']; ?></td>
				<td align="right">
					<input type="button" name="sd" value="edit" class=" btn btn-default">
					<input type="button" name="sd" value="save" class=" btn btn-default">
				</td>
			</tr>
			<tr>
				<td>fasilitas :</td>
				<td><?php echo $nilai['desk']; ?></td>
				<td align="right">
					<input type="button" name="sd" value="edit" class=" btn btn-default">
					<input type="button" name="sd" value="save" class=" btn btn-default">
				</td>
			</tr>
			<tr>
				<td>lokasi :</td>
				<td><?php echo $nilai['lokasi']; ?></td>
				<td align="right">
					<input type="button" name="sd" value="edit" class=" btn btn-default">
					<input type="button" name="sd" value="save" class=" btn btn-default">
				</td>
			</tr>
			<tr>
				<td>contak person :</td>
				<td><?php echo $nilai['kontak']; ?></td>
				<td align="right">
					<input type="button" name="sd" value="edit" class=" btn btn-default">
					<input type="button" name="sd" value="save" class=" btn btn-default">
				</td>
			</tr>
		</table>
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
