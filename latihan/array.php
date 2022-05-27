<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>

<body>
    <?php
    $nilai = array(60, 70, 80, 75, 90);
    sort($nilai);
    var_dump($nilai);
    echo "<br>" . $nilai[2];
    ?>
    <hr>
    <?php
    $dtnilai = array("dina" => 80, "sinta" => 90, "nia" => 85);
    asort($dtnilai);
    var_dump($dtnilai);
    echo "<br>" . $dtnilai["sinta"];
    echo "<br>";
    ?>
    <hr>
    <?php
    //for
    echo "FOR<br>";
    for ($i = 2; $i <= 13; $i++) {
        echo $i . ",";
    }
    //while
    echo "<br>WHILE<br>";
    $a = 0;
    while ($a <= 13) {
        if ($a >= 2) {
            echo $a . ",";
        }
        $a++;
    }
    //do while
    echo "<br>DO WHILE<br>";
    $b = 0;
    do {
        if ($b >= 2) {
            echo $b . ",";
        }
        $b++;
    } while ($b <= 13);
    ?>
    <hr>
    <?php
    for ($g = 1; $g <= 30; $g++) {
        if ($g % 2 == 0) {
            echo "<b>" . $g . " </b>";
        } else {
            echo "<u>" . $g . " </u>";
        }
    }
    ?>
    <hr>
    <?php
    echo "Bilangan Genap : ";
    for ($l = 1; $l <= 30; $l++) {
        if ($l % 2 == 0) {
            echo $l . " ";
        }
    }
    echo "<br>Bilangan Ganjil : ";
    for ($l = 1; $l <= 30; $l++) {
        if ($l % 2 == 1) {
            echo $l . " ";
        }
    }
    ?>
    <hr>
    <?php
    $mhs = array("putra", "ardi", "galang", "adit", "sulthan", "agung");
    foreach ($mhs as $m) {
        echo $m . ",";
    }
    echo "<br>" . $mhs[1];
    ?>
    <hr>
    <?php
    $dtbarang = array(
        array("kode" => "B01", "nama" => "Buku", "harga" => "Rp.50.000"),
        array("kode" => "B02", "nama" => "Pulpen", "harga" => "Rp.10.000"),
        array("kode" => "B03", "nama" => "Penghapus", "harga" => "Rp.5.000")
    );
    foreach ($dtbarang as $dt) {
        echo $dt["kode"] . ", ";
        echo $dt["nama"] . ", ";
        echo $dt["harga"] . "<br>";
    }
    ?>
</body>

</html>