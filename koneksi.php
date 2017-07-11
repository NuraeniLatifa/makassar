<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "mydb";

	$koneksi = mysqli_connect($host,$user,$pass);
	mysql_select_db($db);
	if (!$koneksi)
	{
		?>
		<script type="text/javascript">
			alert("koneksi Gagal");
		</script>
		<?php
	}
?>