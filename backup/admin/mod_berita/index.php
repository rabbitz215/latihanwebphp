<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mod Berita</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <a class="text-white" href="#" data-bs-toggle="modal" data-bs-target="#tambahModal"><button class="btn btn-primary mt-2">Tambah</button></a>
        <div class="col-md-12 pt-2">
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $berita = array(
                    //     array("id" => "01", "judul" => "Judul Satu", "konten" => "Isi Berita 1...", "link" => "#"),
                    //     array("id" => "02", "judul" => "Judul Dua", "konten" => "Isi Berita 2...", "link" => "#"),
                    //     array("id" => "03", "judul" => "Judul Tiga", "konten" => "Isi Berita 3...", "link" => "#")
                    // );
                    $data = mysqli_query($koneksi, "SELECT * FROM mst_berita");
                    foreach ($data as $br) :
                    ?>
                        <tr>
                            <th scope="row"><?= $br["id_berita"]; ?></th>
                            <td><?= $br["judul"]; ?></td>
                            <td><?= $br["konten"]; ?></td>
                            <td><?= $br["author"]; ?></td>
                            <td>
                                <a href="#" class="btn btn-xs btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="bi bi-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container d-flex justify-content-center">
                        <form class="bg-light p-5">
                            <div class="mt-3">Tambah Data</div>
                            <hr />
                            <div class="mb-3 row">
                                <label for="id" class="col-sm-4 col-form-label">ID</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="id">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="judul" class="col-sm-4 col-form-label">Judul</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="judul">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="konten" class="col-sm-4 col-form-label">Konten</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="konten">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnbatal" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>