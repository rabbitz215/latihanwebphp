<?php
$servername = "127.0.0.1";
$database = "dblatihan";
$user_db = "root";
$pass_db = "";

$koneksi = mysqli_connect($servername, $user_db, $pass_db, $database);
if (!$koneksi) {
    echo "Koneksi gagal";
    exit;
} else {
    //echo "Koneksi berhasil";
}
// mysqli_select_db($koneksi, $database);
