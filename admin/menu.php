<?php
// $list = array(
//     array("id" => "01", "nm_menu" => "Dashboard", "link" => "#"),
//     array("id" => "02", "nm_menu" => "Blog", "link" => "#"),
//     array("id" => "03", "nm_menu" => "Berita", "link" => "mod_berita"),
//     array("id" => "04", "nm_menu" => "Settings Menu", "link" => "mod_menu")
// );
$qry_menu = mysqli_query($koneksi, "SELECT * FROM mst_menu WHERE isactive = '1'");
//foreach ($qry_menu as $l) :
while ($row = mysqli_fetch_array($qry_menu)) {
?>
    <a href="?modul=<?= $row['link']; ?>" style="text-decoration: none;" class="links1">
        <li class="list-group-item links rounded-3 mt-1"><?= $row["nm_menu"]; ?></li>
    </a>
<?php
}
//endforeach;
?>