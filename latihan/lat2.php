<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>

<body>
    <table border="1">
        <tr>
            <th style="padding: 10px;">ID</th>
            <th style="padding: 10px;">Judul</th>
            <th style="padding: 10px;">Konten</th>
            <th style="padding: 10px;">Action</th>
        </tr>
        <?php
        $data = array(
            array("id" => 1, "judul" => "Judul 1", "konten" => "Konten 1"),
            array("id" => 2, "judul" => "Judul 2", "konten" => "Konten 2"),
            array("id" => 3, "judul" => "Judul 3", "konten" => "Konten 3")
        );
        foreach ($data as $d) :
        ?>
            <tr>
                <td><?= $d["id"]; ?></td>
                <td><?= $d["judul"]; ?></td>
                <td><?= $d["konten"]; ?></td>
                <td>Edit</td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</body>

</html>