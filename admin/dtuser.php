<?php
    include('../koneksi.php');
    $query = mysql_query("SELECT * FROM user where id='admin'");
    $hasil = mysql_fetch_assoc($query);
    echo $hasil['nama'];
?>