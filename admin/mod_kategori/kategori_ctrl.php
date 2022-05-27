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
    $nama = $_POST['nm_kategori'];
    if (isset($_POST['isactive'])) {
        $aktif = 1;
    } else {
        $aktif = 0;
    }
    // $isactive = $_POST['isactive'];
    mysqli_query($koneksi, "INSERT INTO mst_kategoriblog (nm_kategori,isactive) VALUES ('$nama','$aktif')");
    header("Location: ../home.php?modul=mod_kategori");
    // echo $nama . "," . $link;
} else if (isset($_GET['act']) && ($_GET['act'] == "update")) {
    $id = $_POST['id_kategori'];
    $up_nama = $_POST['nm_kategori'];
    if (isset($_POST['isactive'])) {
        $aktif = 1;
    } else {
        $aktif = 0;
    }
    mysqli_query($koneksi, "UPDATE mst_kategoriblog SET nm_kategori='$up_nama',isactive='$aktif' WHERE id_kategori='$id'");

    header("Location: ../home.php?modul=mod_kategori");
} else if (isset($_GET['act']) && ($_GET['act'] == "delete")) {
    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM mst_kategoriblog WHERE id_kategori='$id'");

    header("Location: home.php?modul=mod_kategori");
}
