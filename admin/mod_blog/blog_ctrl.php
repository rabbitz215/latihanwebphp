<?php
if (isset($_GET['act']) && ($_GET['act'] == "update" || $_GET['act'] == "save")) {
    require_once "../../config/koneksi_db.php";
    require_once "../../config/config.php";
} else {
    require_once "../config/koneksi_db.php";
    require_once "../config/config.php";
}
security_login();

if (isset($_GET['act']) && ($_GET['act'] == "add")) {
    $judul = "Form Input Data";
} else if (isset($_GET['act']) && ($_GET['act'] == "edit")) {
    $judul1 = "Form Edit Data";
} else if (isset($_GET['act']) && ($_GET['act'] == "save")) {
    $judul = $_POST['judul'];
    $id_kategori = $_POST['id_kategori'];
    $isi = $_POST['isi'];
    $author = $_POST['author'];
    $date = $_POST['date_input'];
    mysqli_query($koneksi, "INSERT INTO mst_blog (judul,id_kategori,isi,author,date_input) VALUES ('$judul','$id_kategori','$isi','$author','$date')");
    header("Location: ../home.php?modul=mod_blog");
} else if (isset($_GET['act']) && ($_GET['act'] == "update")) {
    $id = $_POST['id_blog'];
    $up_judul = $_POST['judul'];
    $up_kategori = $_POST['id_kategori'];
    $up_isi = $_POST['isi'];
    $up_author = $_POST['author'];
    $up_date = $_POST['date_input'];
    mysqli_query($koneksi, "UPDATE mst_blog SET judul='$up_judul',id_kategori='$up_kategori',isi='$up_isi',author='$up_author',date_input='$up_date' WHERE id_blog='$id'");

    header("Location: ../home.php?modul=mod_blog");
} else if (isset($_GET['act']) && ($_GET['act'] == "delete")) {
    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM mst_blog WHERE id_blog='$id'");

    header("Location: home.php?modul=mod_blog");
}
