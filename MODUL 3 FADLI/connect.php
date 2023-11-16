<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$Connect=mysqli_connect("localhost","root","","modul3_wad");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($Connect) {
    echo"database terhubung";
}
else{
    die("matikan koneksi{mysqli_error($Connect)}");
}
// 






?>