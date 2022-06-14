<?php
if (isset($_POST['btnupload'])) {
    $file = $_FILES['urlfile'];
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
    /* cek batas limit file maks.3MB*/
    if ($file['size'] > 100000) {
        $is_upload = 0;
        pesan("File lebih dari 1MB!!");
    }
    /**cek tipe file */
    if ($type_file != "jpg") {
        $is_upload = 0;
        pesan("Tipe file bukan file gambar!!");
    }
    /**buat variabel untuk menampung nama file yang akan disimpan ke database,
     * dengan nilai awal kosong, akan di beri nilai jika upload berhasil
     */
    $namafile = "";
    /**proses upload */
    if ($is_upload == 1) {
        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            $namafile = $file['name']; //variabel ini yang di panggil di query
            pesan("Berhasil upload file gambar!!");
        } else {
            pesan("GAGAL upload file gambar!!");
        }
    }
}
