<?php
  include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>gmakassar.com</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
	 .gbr {
	 	width: 100%;
	 	height: auto;
	 }

	</style>
</head>
<body>
 <nav class="navbar navbar-default">
    <div class="container-fluid ">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">GMM MAKASSAR</a>
      </div>

      <!-- kepala-->
    
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="webgmm.php?page=home">MENU <span class="sr-only">(current)</span></a></li>
          <li><a href="webgmm.php?page=diklat" >BALAI DIKLAT</a></li>
          <li><a href="webgmm.php?page=serbaguna">GEDUNG SERBAGUNA</a></li>
                  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> JADWAL PEMESANAN <span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="webgmm.php?page=diklat">BALAI DIKLAT</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="webgmm.php?page=serbaguna">GEDUNG SERBAGUNA</a></li>
            </ul>
          </li>
              <li><a href="webgmm.php?page=peta">PETA</a></li>
              <li><a href="webgmm.php?page=login">Login</a></li>
          </li>
        </ul>
        <form class="navbar-form">
          <div class="form-group ">
            <input type="text" class="form-control" placeholder="PENCARIAN">
          </div>
          <button type="submit" class="btn btn-default">CARI</button>
        </form>
      </div>
    </div>
  </nav>
<!--badan-->
<?php
  if ($_GET['page'] == "home")
  {
    include "home.php";
  }
  elseif ($_GET['page'] == "diklat")
  {
    include "diklat.php";
  }
  elseif ($_GET['page'] == "serbaguna")
  {
    include "serbaguna.php";
  }
  elseif ($_GET['page'] == "peta") 
  {
    include "peta.php";
  }
  elseif ($_GET['page'] == "login")
  {
    header('location:login/login.php'); 
  }
  elseif ($_GET['page'] == "reg")
  {
    include "registrasi.php";
  }
?>
</body>
</html>