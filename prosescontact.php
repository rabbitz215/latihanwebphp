<?php
require_once("config/koneksi_db.php");
require_once("config/config.php");

$email = $_POST['email'];
$nama = $_POST['nama'];
$informasi = $_POST['informasi'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "INSERT INTO mst_dataresponden (email,nama,informasi,keterangan) VALUES ('$email','$nama','$informasi','$keterangan')");

header("Location: index.php");
