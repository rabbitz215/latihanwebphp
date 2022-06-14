<?php
require_once("../config/koneksi_db.php");
require_once("../config/config.php");

if (isset($_POST['btnlogin'])) {
    $txt_user = $_POST['username'];
    $txt_pass = md5($_POST['password']);
    $result = mysqli_query(
        $koneksi,
        "SELECT * FROM mst_userlogin WHERE username = '" . $txt_user . "' AND password = '" . $txt_pass . "' AND isactive = 1"
    );
    if (mysqli_num_rows($result)) {
        session_start();
        $_SESSION['userlog'] = $txt_user;
        // echo "Hasil = " . mysqli_num_rows($result);
        header("Location: " . URL . "home.php");
    } else {
        header("Location: " . URL . "");
    }
}
