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
    $nama = $_POST['nm_menu'];
    $link = $_POST['link'];
    if (isset($_POST['isactive'])) {
        $aktif = 1;
    } else {
        $aktif = 0;
    }
    // $isactive = $_POST['isactive'];
    mysqli_query($koneksi, "INSERT INTO mst_menu (nm_menu,link,isactive) VALUES ('$nama','$link','$aktif')");
    header("Location: ../home.php?modul=mod_menu");
    // echo $nama . "," . $link;
} else if (isset($_GET['act']) && ($_GET['act'] == "update")) {
    $id = $_POST['id_menu'];
    $up_nama = $_POST['nm_menu'];
    $up_link = $_POST['link'];
    if (isset($_POST['isactive'])) {
        $aktif = 1;
    } else {
        $aktif = 0;
    }
    mysqli_query($koneksi, "UPDATE mst_menu SET nm_menu='$up_nama',link='$up_link',isactive='$aktif' WHERE id_menu='$id'");

    header("Location: ../home.php?modul=mod_menu");
} else if (isset($_GET['act']) && ($_GET['act'] == "delete")) {
    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM mst_menu WHERE id_menu='$id'");

    header("Location: home.php?modul=mod_menu");
}
