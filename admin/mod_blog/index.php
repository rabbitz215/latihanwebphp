<?php
include 'blog_ctrl.php';
if (!isset($_GET['act'])) {
?>
    <div class="container pt-1">
        <a href="?modul=mod_blog&act=add" class="btn btn-primary mb-2">Tambah Data</a>
        <table class="table">
            <tr>
                <th>ID Blog</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Isi</th>
                <th>Author</th>
                <th>Date Input</th>
                <th>Action</th>
            </tr>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM mst_blog");
            foreach ($data as $d) :
                $id_kat = $d['id_kategori'];
                $kat = mysqli_query($koneksi, "SELECT nm_kategori FROM mst_kategoriblog WHERE id_kategori=$id_kat");
                if ($kat2 = mysqli_fetch_array($kat)) {
            ?>
                    <tr>
                        <td><?= $d['id_blog'] ?></td>
                        <td><?= $d['judul'] ?></td>
                        <td><?= $kat2['nm_kategori']; ?></td>
                        <td><?= $d['isi'] ?></td>
                        <td><?= $d['author'] ?></td>
                        <td><?= $d['date_input'] ?></td>
                        <td>
                            <a href="?modul=mod_blog&act=edit&id=<?= $d["id_blog"]; ?>" class="btn btn-xs btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="?modul=mod_blog&act=delete&id=<?= $d["id_blog"]; ?>" class="btn btn-xs btn-danger"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
            <?php
                }
            endforeach;
            ?>
        </table>
    <?php
} else if (isset($_GET['act']) && ($_GET['act'] == "add")) {
    ?>
        <div class="container mt-3">
            <h3 class="mb-4"><?= $judul; ?></h3>
            <div class="row">
                <div class="col">
                    <form action="mod_blog/blog_ctrl.php?modul=mod_blog&act=save" method="POST">
                        <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-6">
                                <input type="hidden" name="author" value="<?= $_SESSION['userlog']; ?>">
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-6">
                                <select class="form-select" aria-label="Default select example" name="id_kategori">
                                    <option selected disabled>-- Pilih Kategori --</option>
                                    <?php
                                    $kategori = mysqli_query($koneksi, "SELECT * FROM mst_kategoriblog");
                                    foreach ($kategori as $k) :
                                    ?>
                                        <option value="<?= $k['id_kategori']; ?>"><?= $k['nm_kategori']; ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="isi" name="isi"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="date_input" class="col-sm-2 col-form-label">Date Input</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="date_input" name="date_input">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <a href="?modul=mod_blog" type="cancel" class="btn btn-secondary"><i class="bi bi-box-arrow-left"></i> Kembali</a>
                                <button type="cancel" class="btn btn-danger"><i class="bi bi-x-square"></i> Reset</button>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    } else if (isset($_GET['act']) && ($_GET['act'] == "edit")) {
        $id = $_GET['id'];
        $qry_edit = mysqli_query($koneksi, "SELECT * FROM mst_blog WHERE id_blog='$id'");
        foreach ($qry_edit as $q) :
        ?>
            <div class="container mt-3">
                <h3 class="mb-4"><?= $judul1; ?></h3>
                <div class="row">
                    <div class="col">
                        <form action="mod_blog/blog_ctrl.php?modul=mod_blog&act=update" method="POST">
                            <div class="mb-3 row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="id_blog" value="<?= $q['id_blog']; ?>">
                                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $q['judul']; ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Default select example" name="id_kategori">
                                        <?php
                                        $kategori1 = mysqli_query($koneksi, "SELECT * FROM mst_kategoriblog");
                                        foreach ($kategori1 as $k1) :
                                            if ($k1['id_kategori'] === $q['id_kategori']) {
                                                $select = "selected";
                                            } else {
                                                $select = "";
                                            }
                                        ?>
                                            <option value="<?= $k1['id_kategori']; ?>" <?= $select; ?>><?= $k1['nm_kategori']; ?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                                <div class="col-sm-6">
                                    <textarea type="text" class="form-control" id="isi" name="isi"><?= $q['isi']; ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="author" class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Default select example" name="author">
                                        <?php
                                        $author = mysqli_query($koneksi, "SELECT username FROM mst_userlogin");
                                        foreach ($author as $a) :
                                            if ($a['username'] === $q['author']) {
                                                $select = "selected";
                                            } else {
                                                $select = "";
                                            }
                                        ?>
                                            <option value="<?= $a['username']; ?>" <?= $select; ?>><?= $a['username']; ?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="date_input" class="col-sm-2 col-form-label">Date Input</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" id="date_input" name="date_input" value="<?= $q['date_input']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <a href="?modul=mod_blog" type="cancel" class="btn btn-secondary"><i class="bi bi-box-arrow-left"></i> Kembali</a>
                                    <button type="cancel" class="btn btn-danger"><i class="bi bi-x-square"></i> Reset</button>
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <?php
        endforeach;
    }
    ?>