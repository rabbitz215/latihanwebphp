<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>RabbitZ | My Blog</title>
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="resume.html">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="uas/index.html">My Store</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-download"></i>
                                Download
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="assets/materi/pengenalan_html.pdf" download="Materi_HTML">Materi
                                        HTML</a></li>
                                <li><a class="dropdown-item" href="assets/materi/Pengenalan_CSS.pdf" download="Materi_CSS">Materi
                                        CSS</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="assets/materi/Bootstrap.pdf" download="Materi_Bootstrap">Materi
                                        Bootstrap</a></li>
                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <!-- header -->
    <header class="bg-secondary bg-opacity-25 pt-5" id="home">
        <div class="container-fluid justify-content-center align-items-center d-flex flex-row pb-1">
            <h2 class="text-dark pt-3 ffam pe-3 hello">Hello... <br><span style="font-weight: bold;">Welcome To My
                    Blog!!</span></h2>
            <img src="assets/img/head.jpg" width="25%" alt="" class="rounded-circle mt-5 border border-2 border-secondary">
        </div>

    </header>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
        <style>
            .path-0 {
                animation: pathAnim-0 4s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @keyframes pathAnim-0 {
                0% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 72.24871794871797,205.8128205128205 144.49743589743593,211.62564102564102 228,190 C 311.50256410256407,168.37435897435898 406.25897435897434,119.31025641025641 498,143 C 589.7410256410257,166.68974358974359 678.4666666666667,263.1333333333333 750,266 C 821.5333333333333,268.8666666666667 875.8743589743589,178.15641025641025 940,143 C 1004.1256410256411,107.84358974358976 1078.0358974358974,128.24102564102566 1163,147 C 1247.9641025641026,165.75897435897434 1343.9820512820513,182.87948717948717 1440,200 C 1440,200 1440,400 1440,400 Z");
                }

                25% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 80.05384615384614,221.45384615384614 160.10769230769228,242.9076923076923 235,258 C 309.8923076923077,273.0923076923077 379.62307692307695,281.82307692307694 473,252 C 566.376923076923,222.17692307692306 683.4,153.79999999999998 762,130 C 840.6,106.20000000000002 880.776923076923,126.97692307692304 949,150 C 1017.223076923077,173.02307692307696 1113.4923076923078,198.2923076923077 1200,207 C 1286.5076923076922,215.7076923076923 1363.253846153846,207.85384615384615 1440,200 C 1440,200 1440,400 1440,400 Z");
                }

                50% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 76.6974358974359,188.45897435897436 153.3948717948718,176.91794871794872 225,160 C 296.6051282051282,143.08205128205128 363.1179487179487,120.78717948717946 443,128 C 522.8820512820513,135.21282051282054 616.1333333333334,171.93333333333337 705,199 C 793.8666666666666,226.06666666666663 878.3487179487179,243.47948717948717 959,227 C 1039.6512820512821,210.52051282051283 1116.4717948717948,160.14871794871794 1196,150 C 1275.5282051282052,139.85128205128206 1357.7641025641026,169.92564102564103 1440,200 C 1440,200 1440,400 1440,400 Z");
                }

                75% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 65.62820512820514,189.53846153846155 131.25641025641028,179.07692307692307 218,178 C 304.7435897435897,176.92307692307693 412.6025641025641,185.23076923076925 500,195 C 587.3974358974359,204.76923076923075 654.3333333333334,216 719,238 C 783.6666666666666,260 846.0641025641027,292.76923076923083 926,274 C 1005.9358974358973,255.2307692307692 1103.4102564102564,184.9230769230769 1192,164 C 1280.5897435897436,143.0769230769231 1360.2948717948718,171.53846153846155 1440,200 C 1440,200 1440,400 1440,400 Z");
                }

                100% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 72.24871794871797,205.8128205128205 144.49743589743593,211.62564102564102 228,190 C 311.50256410256407,168.37435897435898 406.25897435897434,119.31025641025641 498,143 C 589.7410256410257,166.68974358974359 678.4666666666667,263.1333333333333 750,266 C 821.5333333333333,268.8666666666667 875.8743589743589,178.15641025641025 940,143 C 1004.1256410256411,107.84358974358976 1078.0358974358974,128.24102564102566 1163,147 C 1247.9641025641026,165.75897435897434 1343.9820512820513,182.87948717948717 1440,200 C 1440,200 1440,400 1440,400 Z");
                }
            }
        </style>
        <defs>
            <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="5%" stop-color="#dadcdeff"></stop>
                <stop offset="95%" stop-color="#dadcdeff"></stop>
            </linearGradient>
        </defs>
        <path d="M 0,400 C 0,400 0,200 0,200 C 72.24871794871797,205.8128205128205 144.49743589743593,211.62564102564102 228,190 C 311.50256410256407,168.37435897435898 406.25897435897434,119.31025641025641 498,143 C 589.7410256410257,166.68974358974359 678.4666666666667,263.1333333333333 750,266 C 821.5333333333333,268.8666666666667 875.8743589743589,178.15641025641025 940,143 C 1004.1256410256411,107.84358974358976 1078.0358974358974,128.24102564102566 1163,147 C 1247.9641025641026,165.75897435897434 1343.9820512820513,182.87948717948717 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path>
    </svg>
    <!-- section about -->
    <section id="about">
        <div class="container-fluid align-items-center d-flex flex-column pb-5">
            <h2 class="text-dark fw-bold pb-2 pt-3">About Me</h2>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">My name is Galang Putra Ananda Wiyono, I was born on Madiun, 20 June 2002 But
                    i live in Surabaya 3 months after i was born.
                    My Hobby is playing Games on my personal computer at home and make simple program.
                </div>
            </div>
            <div class="col-md-3"></div>
    </section>
    <!-- section portofolio -->
    <section id="portofolio">
        <div class="container-fluid align-items-center d-flex flex-column pb-5 bg-secondary bg-opacity-25 pt-5">
            <h2 class="text-dark fw-bold pb-2 pt-3 text-center">Programming Language I Have Learned <br>(In Order)</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <img src="assets/img/php.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">PHP</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <img src="assets/img/c1.png" height="240px" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">C++</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <img src="assets/img/py.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">Python</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <img src="assets/img/js.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">JavaScript</h5>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section my blog -->
    <section id="about">
        <div class="container-fluid align-items-center d-flex flex-column pb-4">
            <h2 class="text-dark fw-bold pb-2 pt-5">My Blog</h2>
        </div>
        <div class="container-fluid justify-content-center d-flex flex-row pb-4">
            <div class="row">
                <div class="col-md-4 text-end"><img src="assets/img/dc.png" class="border border-2 border-secondary" width="150" alt=""></div>
                <div class="col-md-6">
                    <h4>Dreamcatcher</h4>
                    <div class="d-flex">
                        <div class="tanggal">10-11-2021</div>
                        <label class="ps-2 pb-2 text-primary">Created By Galang</label>
                    </div>
                    <p>Dreamcatcher (bahasa Korea: 드림캐쳐), sebelumnya dikenal sebagai Minx (bahasa Korea: 밍스), adalah girl group
                        yang dibentuk oleh HappyFace Entertainment.
                        Grup ini terdiri dari tujuh anggota, yakni JiU, SuA, Siyeon, Handong, Yoohyeon, Dami dan Gahyeon.</p>
                    <a href="detailblog1.html">Baca Selengkapnya</a>
                    <hr>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4 text-end"><img src="assets/img/okrock.png" class="border border-2 border-secondary" width="150" alt=""></div>
                <div class="col-md-6">
                    <h4>One Ok Rock</h4>
                    <div class="d-flex">
                        <div class="tanggal">10-11-2021</div>
                        <label class="ps-2 pb-2 text-primary">Created By Galang</label>
                    </div>
                    <p>One Ok Rock (ditulis sebagai ONE OK ROCK) adalah band rock Jepang yang dibentuk tahun 2005 di Tokyo. Band
                        ini beranggotakan Taka (vokalis), Toru (gitaris), Ryota (bassis),
                        dan Tomoya (drummer). Pada awalnya band ini memiliki lima anggota, namun gitaris Alex keluar pada tahun
                        2009.</p>
                    <a href="detailblog2.html">Baca Selengkapnya</a>
                    <hr>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4 text-end"><img src="assets/img/tgs.jpg" class="border border-2 border-secondary" width="150" alt=""></div>
                <div class="col-md-6">
                    <h4>Tugas 1</h4>
                    <div class="d-flex">
                        <div class="tanggal">11-3-2022</div>
                        <label class="ps-2 pb-2 text-primary">Created By Galang</label>
                    </div>
                    <p>Tugas Sejarah WebServer, Perbedaan HTTP dan HTTPS, Jenis WebServer, IIS Windows</p>
                    <a href="tugas1.html">Baca Selengkapnya</a>
                    <hr>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- section contact us -->
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
        <style>
            .path-0 {
                animation: pathAnim-0 4s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @keyframes pathAnim-0 {
                0% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 81.93846153846155,207.9153846153846 163.8769230769231,215.83076923076922 246,217 C 328.1230769230769,218.16923076923078 410.4307692307691,212.59230769230774 494,207 C 577.5692307692309,201.40769230769226 662.4,195.79999999999998 731,196 C 799.6,196.20000000000002 851.9692307692306,202.20769230769233 933,214 C 1014.0307692307694,225.79230769230767 1123.7230769230769,243.36923076923077 1213,242 C 1302.2769230769231,240.63076923076923 1371.1384615384616,220.31538461538463 1440,200 C 1440,200 1440,400 1440,400 Z");
                }

                25% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 69.92564102564103,208.75641025641028 139.85128205128206,217.51282051282053 223,209 C 306.14871794871794,200.48717948717947 402.52051282051275,174.70512820512818 490,169 C 577.4794871794873,163.29487179487182 656.0666666666666,177.66666666666669 742,194 C 827.9333333333334,210.33333333333331 921.2128205128206,228.6282051282051 987,213 C 1052.7871794871794,197.3717948717949 1091.0820512820512,147.82051282051282 1162,140 C 1232.9179487179488,132.17948717948718 1336.4589743589745,166.0897435897436 1440,200 C 1440,200 1440,400 1440,400 Z");
                }

                50% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 88.72307692307692,235.31025641025641 177.44615384615383,270.62051282051283 253,261 C 328.55384615384617,251.37948717948717 390.9384615384615,196.82820512820513 472,202 C 553.0615384615385,207.17179487179487 652.8,272.0666666666667 735,255 C 817.2,237.9333333333333 881.8615384615387,138.90512820512822 959,131 C 1036.1384615384613,123.09487179487179 1125.7538461538459,206.3128205128205 1208,233 C 1290.2461538461541,259.6871794871795 1365.123076923077,229.84358974358975 1440,200 C 1440,200 1440,400 1440,400 Z");
                }

                75% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 65.6974358974359,163.50512820512822 131.3948717948718,127.01025641025643 213,136 C 294.6051282051282,144.98974358974357 392.1179487179488,199.46410256410252 478,233 C 563.8820512820512,266.5358974358975 638.1333333333333,279.1333333333334 722,269 C 805.8666666666667,258.8666666666666 899.3487179487181,226.0025641025641 990,206 C 1080.651282051282,185.9974358974359 1168.4717948717948,178.85641025641024 1243,180 C 1317.5282051282052,181.14358974358976 1378.7641025641026,190.57179487179488 1440,200 C 1440,200 1440,400 1440,400 Z");
                }

                100% {
                    d: path("M 0,400 C 0,400 0,200 0,200 C 81.93846153846155,207.9153846153846 163.8769230769231,215.83076923076922 246,217 C 328.1230769230769,218.16923076923078 410.4307692307691,212.59230769230774 494,207 C 577.5692307692309,201.40769230769226 662.4,195.79999999999998 731,196 C 799.6,196.20000000000002 851.9692307692306,202.20769230769233 933,214 C 1014.0307692307694,225.79230769230767 1123.7230769230769,243.36923076923077 1213,242 C 1302.2769230769231,240.63076923076923 1371.1384615384616,220.31538461538463 1440,200 C 1440,200 1440,400 1440,400 Z");
                }
            }
        </style>
        <defs>
            <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="5%" stop-color="#dadcdeff"></stop>
                <stop offset="95%" stop-color="#dadcdeff"></stop>
            </linearGradient>
        </defs>
        <path d="M 0,400 C 0,400 0,200 0,200 C 81.93846153846155,207.9153846153846 163.8769230769231,215.83076923076922 246,217 C 328.1230769230769,218.16923076923078 410.4307692307691,212.59230769230774 494,207 C 577.5692307692309,201.40769230769226 662.4,195.79999999999998 731,196 C 799.6,196.20000000000002 851.9692307692306,202.20769230769233 933,214 C 1014.0307692307694,225.79230769230767 1123.7230769230769,243.36923076923077 1213,242 C 1302.2769230769231,240.63076923076923 1371.1384615384616,220.31538461538463 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
    </svg>
    <section id="contact">
        <div class="container-fluid align-items-center d-flex flex-column pb-4 bg-secondary bg-opacity-25">
            <h2 class="text-dark fw-bold pb-2 pt-3 text-center">Contact Us</h2>
            <form action="#" method="POST">
                <fieldset>
                    <table>
                        <tbody>
                            <tr>
                                <td class="pb-3"><label for="">Email</label></td>
                                <td class="pb-3"><input type="email" name="txt_email" id="txt_email" size="50" placeholder="example@gmail.com"></td>
                            </tr>
                            <tr>
                                <td class="pb-3"><label for="" class="pe-5">Nama Lengkap</label></td>
                                <td class="pb-3"><input type="text" name="nama" id="nama" size="50"></td>
                            </tr>
                            <tr>
                                <td class="pb-3">Informasi</td>
                                <td class="pb-3">
                                    <select name="informasi" id="informasi" style="min-width: 408px;">
                                        <option value="" selected disabled>Informasi</option>
                                        <option value="css">Materi CSS</option>
                                        <option value="html">Materi HTML</option>
                                        <option value="bootstrap">Materi Bootstrap</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td> <textarea name="keterangan" id="keterangan" cols="53" rows="5"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-return-right"></i> Submit</button>
                        <button type="reset" class="btn btn-danger"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    </center>
                </fieldset>
            </form>
        </div>
    </section>
    <!-- footer -->
    <footer class="bg-primary bg-gradient">
        <section class="">
            <div class="container text-center text-white text-md-start">
                <div class="row">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 pt-5">
                        <h6 class="fw-bold mb-4">
                            RABBITZ OFFICE
                        </h6>
                        <p style="font-weight: bold;"><i class="bi bi-person-fill"></i>
                            Galang Putra
                        </p>
                        <p><a href="https://goo.gl/maps/mHF5SD6gT8vHGdYP8" target="_blank" class="link"><i class="bi bi-house-fill"></i>
                                Jl.Ratna 2 No.10
                            </a></p>
                        <p><a href="https://wa.me/6282233492280" target="_blank" class="link"><i class="bi bi-telephone-fill"></i>
                                +62 822-3349-2280
                            </a></p>
                        <p><a href="mailto:galangputra376@gmail.com" target="_blank" class="link"><i class="bi bi-envelope-fill"></i>
                                galangputra376@gmail.com
                            </a></p>
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
            <center>
                <a href="#home" class="back">
                    <i class="bi bi-arrow-up-circle-fill"></i>
                    <br>
                    Back To Top
                </a>
            </center>
        </section>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>