<?php
include 'kategori_ctrl.php';
if (!isset($_GET['act'])) {
?>
    <div class="container pt-1">
        <a href="?modul=mod_kategori&act=add" class="btn btn-primary mb-2">Tambah Data</a>
        <table class="table">
            <tr>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
                <th>Action</th>
            </tr>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM mst_kategoriblog");
            foreach ($data as $d) :
            ?>
                <tr>
                    <td><?= $d['id_kategori'] ?></td>
                    <td><?= $d['nm_kategori'] ?></td>
                    <td>
                        <a href="?modul=mod_kategori&act=edit&id=<?= $d["id_kategori"]; ?>" class="btn btn-xs btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="?modul=mod_kategori&act=delete&id=<?= $d["id_kategori"]; ?>" class="btn btn-xs btn-danger"><i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php
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
                    <form action="mod_kategori/kategori_ctrl.php?modul=mod_kategori&act=save" method="POST">
                        <div class="mb-3 row">
                            <label for="namakat" class="col-sm-2 col-form-label">Nama Kategori</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nm_kategori" name="nm_kategori">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="isactive" id="isactive"> Aktif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <a href="?modul=mod_kategori" type="cancel" class="btn btn-secondary"><i class="bi bi-box-arrow-left"></i> Kembali</a>
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
        $qry_edit = mysqli_query($koneksi, "SELECT * FROM mst_kategoriblog WHERE id_kategori='$id'");
        foreach ($qry_edit as $q) :
        ?>
            <div class="container mt-3">
                <h3 class="mb-4"><?= $judul1; ?></h3>
                <div class="row">
                    <div class="col">
                        <form action="mod_kategori/kategori_ctrl.php?modul=mod_kategori&act=update" method="POST">
                            <div class="mb-3 row">
                                <label for="namakategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" name="id_kategori" value="<?= $q['id_kategori']; ?>">
                                    <input type="text" class="form-control" id="nm_kategori" name="nm_kategori" value="<?= $q['nm_kategori']; ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="isactive" id="isactive" <?= $q['isactive'] == 1 ? "checked" : "" ?>> Aktif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <a href="?modul=mod_kategori" type="cancel" class="btn btn-secondary"><i class="bi bi-box-arrow-left"></i> Kembali</a>
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