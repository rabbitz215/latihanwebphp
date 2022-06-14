<?php
if (isset($_POST['btnupload'])) {
    $file = $_FILES['urlfile'];
    var_dump($file);
    $target_dir = "../../assets/img/";
    echo $file['name'] . "<br>";
    $target_file = $target_dir . $file['name'];
    echo $target_file . "<br>";
    move_uploaded_file($file['tmp_name'], $target_file);
    header("Location: ../home.php?modul=mod_upload");
}
