<?php
	include "../koneksi.php";
	session_start();
	$id = $_POST['username'];
	$pass = $_POST['password'];
	$data = mysqli_query($koneksi,"select * from user where id = '$id'");
	$jum = mysqli_num_rows($data);
	if ($jum <= 0)
	{
		?>
		<script type="text/javascript">
			alert("Nama Pengguna Tidak Ditemuakan");
			window.location = "login.php";
		</script>
		<?php
	}
	else
	{
		$data = mysqli_fetch_array($data);
		if ($data['pass'] != $pass)
		{
			?>
			<script type="text/javascript">
				alert("Kata Sandi Tidak Cocok");
				window.location = "login.php";
			</script>
			<?php
		}
		else
		{
			$data1 = mysqli_query($koneksi,"select * from user as a left join tb_balai as b on a.id = b.id where a.id = '$id'");
			$jum1 = mysqli_fetch_array($data1);
			$_SESSION['status'] = $jum1['level'];
			$_SESSION['nama'] = $jum1['nama_pemilik'];
			$_SESSION['user'] = $jum1['id'];
			if ($jum1['level'] == "Admin")
			{
				header('location:../admin/admin.php');
			}
			else
			{
				header('location:../admin/user.php');
			}
		}
	}
?>