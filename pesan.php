<?php
    include "koneksi.php";
    $myget = $_GET['id'];
    $query = mysql_query("select * from tb_balai where id_balai = '$myget'");
    $data = mysql_fetch_array($query);
?>
    <table width=100% style=': 1pt dashed #0000CC;padding: 10px;'>
            <form action="#" method="POST">
            <tr><td>Nama</td><td> : <input type=text name=nama readonly="" value="<?php echo $data[''] ?>" size=40></td></tr>
            <tr><td>gedung acc</td><td> : <input type=text name=gedung size=40></td></tr>

            <tr><td>harga</td><td> : <input type=text name= Rp. size=40></td></tr>
            <tr><td valign=top>masa berlaku</td><td> <textarea name=masaberlaku '></textarea></td></tr>
            <tr><td colspan=2><input type=submit name=submit value=Kirim></td></tr>

    </form>
    </table>




<script src="js/jquery.js"></script>
 <script src="js/bootstrap.js"></script>
