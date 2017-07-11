<?php
	include "koneksi.php";

	if (isset($_POST['reg']))
	{
		$file = $_FILES['gbr']['name'];
		$a = $_POST['nama'];
		$b = $_POST['jg'];
		$c = $_POST['ng'];
		$d = $_POST['hrg'];
		$e = $_POST['desk'];
		$f = $_POST['kontak'];
		$g = $file;
		$h = "0";
		$query = "insert into tb_balai values('as','$a','$b','$c','$d','$e','$f','$g','$h','as')";
		$sukses = mysqli_query($koneksi,$query);
		if ($sukses)
		{
			$path = $_FILES['gbr']['tmp_name'];
			move_uploaded_file($path, "gambar/".$file);
			?>
			<script type="text/javascript">
				alert("Berhasil")
			</script>
			<?php
		}
		else
		{
			echo mysqli_error($koneksi);	
		}
	}
	
?>