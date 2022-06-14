<?php
include 'menu_ctrl.php';
if (!isset($_GET['act'])) {
?>
    <div class="container pt-1">
        <a href="?modul=mod_menu&act=add" class="btn btn-primary mb-2">Tambah Data</a>
        <table class="table">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Id Menu</th>
                    <th>Nama Menu</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM mst_menu");
            foreach ($data as $d) :
            ?>
                <tr>
                    <td><?= $d["id_menu"]; ?></td>
                    <td><?= $d["nm_menu"]; ?></td>
                    <td><?= $d["link"]; ?></td>
                    <td>
                        <a href="?modul=mod_menu&act=edit&id=<?= $d["id_menu"]; ?>" class="btn btn-xs btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="?modul=mod_menu&act=delete&id=<?= $d["id_menu"]; ?>" class="btn btn-xs btn-danger"><i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </div>
<?php
} else if (isset($_GET['act']) && ($_GET['act'] == "add")) {
?>
    <div class="container mt-3">
        <h3 class="mb-4"><?= $judul; ?></h3>
        <div class="row">
            <div class="col">
                <form action="mod_menu/menu_ctrl.php?modul=mod_menu&act=save" method="POST">
                    <div class="mb-3 row">
                        <label for="namamenu" class="col-sm-2 col-form-label">Nama Menu</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_menu" name="nm_menu">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="link" name="link">
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
                            <a href="?modul=mod_menu" type="cancel" class="btn btn-secondary"><i class="bi bi-box-arrow-left"></i> Kembali</a>
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
    $qry_edit = mysqli_query($koneksi, "SELECT * FROM mst_menu WHERE id_menu='$id'");
    foreach ($qry_edit as $q) :
    ?>
        <div class="container mt-3">
            <h3 class="mb-4"><?= $judul1; ?></h3>
            <div class="row">
                <div class="col">
                    <form action="mod_menu/menu_ctrl.php?modul=mod_menu&act=update" method="POST">
                        <div class="mb-3 row">
                            <label for="namamenu" class="col-sm-2 col-form-label">Nama Menu</label>
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control" name="id_menu" value="<?= $q['id_menu']; ?>">
                                <input type="text" class="form-control" id="nama_menu" name="nm_menu" value="<?= $q['nm_menu']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="link" class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="link" name="link" value="<?= $q['link']; ?>">
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
                                <a href="?modul=mod_menu" type="cancel" class="btn btn-secondary"><i class="bi bi-box-arrow-left"></i> Kembali</a>
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