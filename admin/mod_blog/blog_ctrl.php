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
    $file = $_FILES['img_upload'];
    var_dump($file);
    /*tentukan folder lokasi direktori penyimpanan file */
    $target_dir = "../../assets/img/";
    echo $file['name'] . "<br/>"; //output ini yang disimpan ke database
    /*tujuan penyimpanan file, direktori dan nama file*/
    $target_file = $target_dir . $file['name'];
    //echo $target_file."<br/>";
    /*untuk mendapatkan tipe file yang diupload */
    $type_file = pathinfo($file['name'], PATHINFO_EXTENSION);
    /*buat variabel untuk menampung hasil validasi ,
	apakah file boleh diupload atau tidak, jika 1 maka boleh diupload,
	jika 0 maka tidak dapat diupload*/
    $is_upload = 1;
    /* cek batas limit file maks.5MB*/
    if ($file['size'] > 5242880) {
        $is_upload = 0;
        header("Location: ../home.php?modul=mod_blog&pesan=size");
    }
    /**cek tipe file */
    if ($type_file != "jpg") {
        $is_upload = 0;
        header("Location: ../home.php?modul=mod_blog&pesan=ekstensi");
    }
    /**buat variabel untuk menampung nama file yang akan disimpan ke database,
     * dengan nilai awal kosong, akan di beri nilai jika upload berhasil
     */
    $namafile = "";
    /**proses upload **/
    if ($is_upload == 1) {
        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            $namafile = $file['name']; //variabel ini yang di panggil di query
            mysqli_query($koneksi, "INSERT INTO mst_blog (judul,id_kategori,isi,author,date_input,img_upload) VALUES ('$judul','$id_kategori','$isi','$author','$date','$namafile')");
            header("Location: ../home.php?modul=mod_blog&pesan=berhasil");
        }
    } else {
        /* cek batas limit file maks.5MB*/
        if ($file['size'] > 5242880) {
            // $is_upload = 0;
            header("Location: ../home.php?modul=mod_blog&pesan=size");
        } else
            /**cek tipe file */
            if ($type_file != "jpg") {
                // $is_upload = 0;
                header("Location: ../home.php?modul=mod_blog&pesan=ekstensi");
            } else {
                header("Location: ../home.php?modul=mod_blog&pesan=gagal");
            }
    }
} else if (isset($_GET['act']) && ($_GET['act'] == "update")) {
    $id = $_POST['id_blog'];
    $up_judul = $_POST['judul'];
    $up_kategori = $_POST['id_kategori'];
    $up_isi = $_POST['isi'];
    $up_author = $_POST['author'];
    $up_date = $_POST['date_input'];
    $file = $_FILES['img_upload'];
    var_dump($file);
    /*tentukan folder lokasi direktori penyimpanan file */
    $target_dir = "../../assets/img/";
    echo $file['name'] . "<br/>"; //output ini yang disimpan ke database
    /*tujuan penyimpanan file, direktori dan nama file*/
    $target_file = $target_dir . $file['name'];
    //echo $target_file."<br/>";
    /*untuk mendapatkan tipe file yang diupload */
    $type_file = pathinfo($file['name'], PATHINFO_EXTENSION);
    /*buat variabel untuk menampung hasil validasi ,
	apakah file boleh diupload atau tidak, jika 1 maka boleh diupload,
	jika 0 maka tidak dapat diupload*/
    $is_upload = 1;
    /* cek batas limit file maks.5MB*/
    if ($file['size'] > 5242880) {
        $is_upload = 0;
        header("Location: ../home.php?modul=mod_blog&pesan=size");
    }
    /**cek tipe file */
    if ($type_file != "jpg") {
        $is_upload = 0;
        header("Location: ../home.php?modul=mod_blog&pesan=ekstensi");
    }
    /**buat variabel untuk menampung nama file yang akan disimpan ke database,
     * dengan nilai awal kosong, akan di beri nilai jika upload berhasil
     */
    $namafile = "";
    $data_foto = mysqli_query($koneksi, "SELECT img_upload FROM mst_blog WHERE id_blog='$id'");
    // Mengubah data yang diambil menjadi Array
    $foto_lama = mysqli_fetch_array($data_foto);

    // Menghapus Foto lama didalam folder FOTO
    unlink("foto/" . $foto_lama['siswa_foto']);
    /**proses upload */
    if ($is_upload == 1) {
        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            $namafile = $file['name']; //variabel ini yang di panggil di query
            mysqli_query($koneksi, "UPDATE mst_blog SET judul='$up_judul',id_kategori='$up_kategori',isi='$up_isi',author='$up_author',date_input='$up_date',img_upload='$namafile' WHERE id_blog='$id'");
            unlink("../../assets/img/" . $foto_lama['img_upload']);
            header("Location: ../home.php?modul=mod_blog&pesan=berhasiledit");
        }
    } else {
        /* cek batas limit file maks.3MB*/
        if ($file['size'] > 10000000) {
            // $is_upload = 0;
            header("Location: ../home.php?modul=mod_blog&pesan=size");
        } else
            /**cek tipe file */
            if ($type_file != "jpg") {
                // $is_upload = 0;
                header("Location: ../home.php?modul=mod_blog&pesan=ekstensi");
            } else {
                header("Location: ../home.php?modul=mod_blog&pesan=gagaledit");
            }
    }
} else if (isset($_GET['act']) && ($_GET['act'] == "delete")) {
    $id = $_GET['id'];
    $data_foto = mysqli_query($koneksi, "SELECT * FROM mst_blog WHERE id_blog='$id'");
    // Mengubah data yang diambil menjadi Array
    $foto_lama = mysqli_fetch_array($data_foto);
    unlink("../../assets/img/" . $foto_lama['img_upload']);
    $query = mysqli_query($koneksi, "DELETE FROM mst_blog WHERE id_blog='$id'");
    header("Location: home.php?modul=mod_blog");
}
