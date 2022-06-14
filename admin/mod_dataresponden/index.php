<?php
if (!isset($_GET['act'])) {
?>
    <div class="container pt-1">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Informasi</th>
                <th>Keterangan</th>
            </tr>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM mst_dataresponden");
            foreach ($data as $d) :
            ?>
                <tr>
                    <td><?= $d['id'] ?></td>
                    <td><?= $d['email'] ?></td>
                    <td><?= $d['nama'] ?></td>
                    <td><?= $d['informasi'] ?></td>
                    <td><?= $d['keterangan'] ?></td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    <?php
}
