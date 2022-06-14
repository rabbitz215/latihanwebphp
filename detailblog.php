<?php
require_once("config/koneksi_db.php");
require_once("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/styleblog.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <title>Detail Blog</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary bg-gradient fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="navbar-brand head" href="#">RabbitZ's Page</a>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="resume.html">Resume</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-download"></i>
                                Download
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="assets/materi/pengenalan_html.pdf" download="Materi_HTML">Materi HTML</a></li>
                                <li><a class="dropdown-item" href="assets/materi/Pengenalan_CSS.pdf" download="Materi_CSS">Materi CSS</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="assets/materi/Bootstrap.pdf" download="Materi_Bootstrap">Materi Bootstrap</a></li>
                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <!-- header -->
    <header>

        <!-- <div class="overlay"></div> -->

        <!-- <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="assets/vid/dreamcatcher.mp4" type="video/mp4">
        </video> -->
        <?php
        $id_blog = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT a.*, b.nm_kategori FROM mst_blog a INNER JOIN mst_kategoriblog b ON a.id_kategori = b.id_kategori WHERE id_blog='$id_blog'");
        foreach ($data as $d) :
        ?>
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white ">
                        <h1 class="display-3"><?= $d['judul']; ?></h1>
                        <p class="lead mb-0"><?= $d['nm_kategori']; ?></p>
                    </div>
                </div>
            </div>
    </header>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2><?= $d['judul']; ?></h2>
                    <p><i class="bi bi-calendar pe-2"></i><?= $d['date_input']; ?>, Created By : <?= $d['author']; ?> <b>#<?= $d['nm_kategori']; ?></b></p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <img src="assets/img/<?= $d['img_upload']; ?>" width="300px">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto pt-4">
                    <p><?= $d['isi']; ?></p>
                </div>
            </div>
        </div>
    </section>
<?php
        endforeach;
?>
<!-- Footer -->
<footer class="bg-primary bg-gradient">
    <section class="">
        <div class="container text-center text-white text-md-start">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 pt-5">
                    <h6 class="fw-bold mb-4">
                        RABBITZ OFFICE
                    </h6>
                    <p><i class="bi bi-person-fill"></i>
                        Galang Putra
                    </p>
                    <p><i class="bi bi-house-fill"></i>
                        Jl.Ratna 2 No.10
                    </p>
                    <p><i class="bi bi-telephone-fill"></i>
                        +62 822-3349-2280
                    </p>
                    <p><i class="bi bi-envelope-fill"></i>
                        galangputra376@gmail.com
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 pt-5">
                    <h6 class="fw-bold mb-4">
                        SOCIAL MEDIA
                    </h6>
                    <p><a href="https://www.instagram.com/rabbitz.20" target="_blank" class="link"><i class="bi bi-instagram"></i> @rabbitz.20</a></p>
                    <p><a href="https://www.twitter.com/rabbitz215" target="_blank" class="link"><i class="bi bi-twitter"></i>
                            @Rabbitz215</a></p>
                    <p><a href="https://www.facebook.com/galang.us.to" target="_blank" class="link"><i class="bi bi-facebook"></i> Galang Putra</a></p>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>