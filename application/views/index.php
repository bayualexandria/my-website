<html id="#home">

<head>
    <link rel="icon" type="image/png" href="bootstrap/css/1.png">
    <title>Profile | Bayu Wardana</title>
    <link href="../asset/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('asset/');?>bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url('asset/');?>bootstrap/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/');?>/bootstrap/Ionicons/css/ionicons.min.css">
    <style>
        html {
            position: relative;
        }

        body {
            margin-bottom: 120px;
            margin-top: 30px;

        }

        .jumbotron {
            height: 400px;
            background: url('<?= base_url('asset/');?>bootstrap/css/Linux.jpg');
            background-origin: content-box;
            background-size: cover;
            background-position: bottom;
            background-position-y: 185%;
            background-attachment: fixed;
            overflow: hidden;
            text-align: center;
            position: relative;
            /* text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6); */

        }

        #folio {

            background: url('<?= base_url('asset/');?>bootstrap/css/Linux.jpg');
            background-origin: content-box;
            background-size: cover;
            background-position: bottom;
            background-position-y: 185%;
            background-attachment: fixed;
            overflow: hidden;
        }

        .jumbotron img {
            width: 200px;
            border: 5px solid #eaeaea;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);


        }

        .jumbotron h1 {
            text-shadow: 1px 1px 10px rgba(1, 1, 1, 1);
            color: white;

        }

        .jumbotron p {
            text-shadow: 1px 1px 10px rgba(1, 1, 1, 1);
            color: white;

        }

        .jumbotron {
            z-index: 1;
            position: relative;
        }

        .card {
            border: 5px solid #eaeaea;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
            position: unset;
            height: 330px;
            background: #999;
            text-shadow: 1px 1px 10px rgba(1, 1, 1, 1);
            color: white;
        }

        h2 {
            text-shadow: 1px 1px 10px rgba(1, 1, 1, 0.5);

        }

        .portofolio img {

            height: 200px;
        }

        .portofolio .thumbnail {
            opacity: 0;
            transform: translate(0, -40px);
            transition: .5s;
        }

        .portofolio .thumbnail.muncul {
            opacity: 1;
            transform: translate(0, 0);
        }

        hr {
            width: 250px;
            border-top: 3px solid #999;
        }

        #hr-footer {
            margin-top: 3px;
        }

        .myskill {
            width: 83px;
            border-top: 3px solid white;
            margin-top: -5px;

        }

        #about {
            min-height: 700px;
        }

        #folio {
            min-height: 608px;
        }

        footer {
            position: absolute;
            width: 100%;
            height: 140px;
            bottom: 0;
            background-color: #333;
            padding-top: 38px;
        }

        .contact {
            min-height: 800px;

        }

        footer p {
            color: #eee;
            font-size: 1em;
        }

        .pKiri,
        .pKanan {
            opacity: 0;
            transform: translate(-50px, 0)
                /*rotate(15deg)*/
            ;
            transition: 1s;
        }

        .pKanan {
            transform: translate(50px, 0)
                /*rotate(-15deg)*/
            ;
        }

        .pKiri.pMuncul,
        .pKanan.pMuncul {
            opacity: 1;
            transform: translate(0, 0);
        }

        .skill {
            text-align: right;
            padding-right: 20px;
            line-height: 15px;
            color: white;
            background-color: #333;
            text-transform: uppercase;
            border-radius: 40px;
        }

        .web {
            width: 70%;
        }

        .network {
            width: 95%;
        }

        .server {
            width: 80%;
        }

        .office {
            width: 95%;
        }

        .database {
            width: 80%;
        }

        .fa-instagram {
            color: red;
        }

        .fa-facebook-f {
            color: darkblue;
        }

        .fa-github {
            color: black;
        }

        .fa-whatsapp {
            color: green;
        }

        .p-footer {
            margin-top: 10px;
        }

        /* overlay */
        .overlay {
            width: 0;
            height: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0);
            z-index: 9999;
            transition: .8s;
            text-align: center;
            padding: 100px 0;
        }

        .overlay:target {
            width: auto;
            height: auto;
            bottom: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
        }

        .overlay img {
            max-height: 100%;
            box-shadow: 2px 2px 7px rgba(0, 0, 0, .5);
            width: auto;
            height: auto;

        }

        .overlay:target img {
            animation: fadeAjah 1s;
        }

        /* animasi */
        @keyframes zoomDanFade {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes slideDownFade {
            0% {
                opacity: 0;
                margin-top: -20px;
            }

            100% {
                opacity: 1;
                margin-top: 0;
            }
        }

        .overlay .close {
            position: absolute;
            top: 15px;
            left: 800px;
            margin-left: 510px;
            color: white;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid white;
            line-height: 8px;
            padding: 5px;
            font-size: 12px;
            opacity: 0;

        }

        .overlay:target .close {
            animation: slideDownFade .5s .5s forwards;
        }


        /* navigasi */
        .next1,
        .prev1 {
            top: 300px;
            left: 700px;
            margin-left: 350px;
            position: absolute;
            color: grey;
            font-size: 50px;
            text-decoration: none;
            opacity: 0;
        }

        .prev1 {
            margin-left: -450px;
        }

        @keyframes fadeAjah {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .overlay:target .next1,
        .overlay:target .prev1 {
            animation: fadeAjah .5s .5s forwards;
        }

        .admin {
            margin-top: -10;
            top: 5px;
        }
    </style>

</head>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#home" class="navbar-brand page-scroll">Bayu Wardana</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#folio" class="page-scroll">Portofolio</a></li>
                    <li><a href="#contact" class="page-scroll">Contact</a></li>
                    <li>
                        <a href="<?= base_url('index.php/Login'); ?>" class="admin">
                            <button class="btn btn-primary btn-sm">
                                <i class="glyphicon glyphicon-log-in"></i> Login</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- akhir navbar -->

    <!-- jumbotron -->
    <div class="jumbotron text-center jumbotron-fluid" id="home">
        <img src="../asset/dist/img/bayu.jpg" class="img-circle" alt="">
        <h1>Bayu Wardana</h1>
        <p>Networking Computer | Linux Server | Web Programming</p>

    </div>
    <!-- akhir jumbotron -->

    <!-- About -->
    <section class="about" id="about" style="background:white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">About</h2>
                    <hr>
                </div>
            </div>
            <div class="row-header"></div>
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <p class="pKiri text-justify">
                        <h4 class="pKiri text-justify">
                            Hallo, Nama saya adalah Bayu Wardana
                        </h4>
                        <p class="pKiri text-justify">Saya memiliki keahlian dan ingin berkembang dalam mempelajari Jaringan Komputer serta Server dan pemrograman Web-Freamwork. Meskipun saya tidak terlalu ahli dalam hal <i>programmer</i>, tapi saya mempunyai minat dan semangat yang tinggi untuk menjadi seorang <i>programmer</i> yang handal. Karena itu saya tetap belajar dan terus belajar untuk bisa menjadi seorang <i>programmer</i> yang handal agar kelak dikemudian hari bisa memberikan ilmu yang saya peroleh kepada orang lain
                        </p>
                    </p>
                    <br>
                    <div class="card col-sm pKiri">
                        <h4 class="text-center pKiri">My Skill </h4>
                        <hr class="myskill pKiri text-justify">
                        <p class="pKiri text-justify col-sm-12">Web-Programming</p>
                        <div class="col-sm-12">
                            <div class="skill web pKiri text-justify">70%</div>
                        </div>
                        <p class="pKiri text-justify col-sm-12">Computer Networking</p>
                        <div class="col-sm-12">
                            <div class="skill network pKiri text-justify">95%</div>
                        </div>
                        <p class="pKiri text-justify col-sm-12">Server Linux</p>
                        <div class="col-sm-12">
                            <div class="skill server pKiri text-justify">80%</div>
                        </div>
                        <p class="pKiri text-justify col-sm-12">Database Orcale SQL</p>
                        <div class="col-sm-12">
                            <div class="skill database pKiri text-justify">80%</div>
                        </div>
                        <p class="pKiri text-justify col-sm-12">Microsoft Office</p>
                        <div class="col-sm-12">
                            <div class="skill office pKiri text-justify">97%</div>

                        </div>
                    </div>
                    </p>
                </div>
                <div class="col-sm-5">
                    <ul class="col-sm-12">
                        <li class="pKanan">
                            <h5><b>Web Programming</b></h5>
                        </li>
                        <p class="text-justify pKanan">Keahlian yang dimiliki yaitu membuat website menggunakan metode MVC(Model, View and Controller) menggunakan <b>Code Igniter</b> versi 3 dan <b>Bootstrap</b> versi 4 untuk membuat Web Freamwork</p>
                        <li class="pKanan">
                            <h5><b>Computer Networking</b></h5>
                        </li>
                        <p class="text-justify pKanan">Keahlian yang dimiliki yaitu <b>Routing, Mikrotik, Troubleshooting and Maintenance</b></p>
                        <li class="pKanan">
                            <h5><b>Server Linux</b></h5>
                        </li>
                        <p class="text-justify pKanan">Keahlian yang dimiliki yaitu <b>Proxy-Server, DNS-Server, Web-Server, Mail-Server, Monitoring-Server and Data Cloud-Server</b></p>
                        <li class="pKanan">
                            <h5><b>Database Oracle SQL</b></h5>
                        </li>
                        <p class="text-justify pKanan">Keahlian yang dimiliki yaitu membuat dan mengkonfigurasi (<i>Operate</i>) perintah SQL pada sebuah database</p>
                        <li class="pKanan">
                            <h5><b>Microsoft Office</b></h5>
                        </li>
                        <p class="text-justify pKanan">Keahlian yang dimiliki yaitu membuat laporan menggunakan <b>MS.Word, MS.Excel dan MS.Power Point</b></p>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <!--portofolio-->
    <section class="portofolio" id="folio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Portofolio</h2>
                    <hr>
                </div>
            </div>
            <div class="row gallery">
                <div class="col-sm-4">
                    <a href="#gambar-1" class="thumbnail">

                        <img src="../asset/img/img-host/thumbnail/web-programming.png" alt="">
                    </a>
                    <div class="overlay" id="gambar-1">
                        <a href="#folio" class="close">X</a>
                        <a href="#gambar-6" class="prev1 glyphicon glyphicon-chevron-left"></a>
                        <img src="../asset/img/img-host/web-programming.png" alt="">
                        <a href="#gambar-2" class="next1 glyphicon glyphicon-chevron-right"></a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <a href="#gambar-2" class="thumbnail ">
                        <img src="../asset/img/img-host/thumbnail/project-TA2.JPG" alt="Project-TA">
                    </a>
                    <div class="overlay" id="gambar-2">
                        <a href="#folio" class="close">X</a>
                        <a href="#gambar-1" class="prev1 glyphicon glyphicon-chevron-left"></a>
                        <img src="../asset/img/img-host/project-TA2.JPG" alt="">
                        <a href="#gambar-3" class="next1 glyphicon glyphicon-chevron-right"></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="#gambar-3" class="thumbnail">
                        <img src="../asset/img/img-host/thumbnail/andro.jpg" alt="">
                    </a>
                    <div class="overlay" id="gambar-3">
                        <a href="#folio" class="close">X</a>
                        <a href="#gambar-2" class="prev1 glyphicon glyphicon-chevron-left"></a>
                        <img src="../asset/img/img-host/andro.jpg" alt="">
                        <a href="#gambar-4" class="next1 glyphicon glyphicon-chevron-right"></a>
                    </div>

                </div>
                <div class="col-sm-4">
                    <a href="#gambar-4" class="thumbnail">
                        <img src="../asset/img/img-host/thumbnail/project-TA.JPG" alt="">
                    </a>
                    <div class="overlay" id="gambar-4">
                        <a href="#folio" class="close">X</a>
                        <a href="#gambar-3" class="prev1 glyphicon glyphicon-chevron-left"></a>
                        <img src="../asset/img/img-host/project-TA.JPG" alt="">
                        <a href="#gambar-5" class="next1 glyphicon glyphicon-chevron-right"></a>
                    </div>

                </div>
                <div class="col-sm-4">
                    <a href="#gambar-5" class="thumbnail">
                        <img src="../asset/img/img-host/thumbnail/ci.JPG" alt="">
                    </a>
                    <div class="overlay" id="gambar-5">
                        <a href="#folio" class="close">X</a>
                        <a href="#gambar-4" class="prev1 glyphicon glyphicon-chevron-left"></a>
                        <img src="../asset/img/img-host/ci.JPG" alt="">
                        <a href="#gambar-6" class="next1 glyphicon glyphicon-chevron-right"></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="#gambar-6" class="thumbnail">
                        <img src="../asset/img/img-host/thumbnail/web.jpg" alt="">
                    </a>
                    <div class="overlay" id="gambar-6">
                        <a href="#folio" class="close">X</a>
                        <a href="#gambar-5" class="prev1 glyphicon glyphicon-chevron-left"></a>
                        <img src="../asset/img/img-host/web.jpg" alt="">
                        <a href="#gambar-1" class="next1 glyphicon glyphicon-chevron-right"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contact-->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form action="<?= base_url('index.php/Welcome/pesan'); ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="name" id="nama" class="form-control" placeholder="Masukan Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" required>
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telepon</label>
                            <input type="text" name="telp" id="telp" class="form-control" placeholder="Masukan No Telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Message</label>
                            <textarea class="form-control" name="mess" rows="10" placeholder="Masukan Pesan" required></textarea>
                        </div>
                        <button type="submit" name="send" class="btn btn-primary" onclick="pesan()">Kirim Pesan</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="https://www.facebook.com/bayu.alexandria.315"> <i class="fa fa-facebook-f"></i> My-Facebook</a> <span style="color:white">|</span>
                    <a href="https://www.instagram.com/bayualexandria13/"><i class="fa fa-instagram"></i> My-Instagram</a> <span style="color:white">|</span>
                    <a><i class="fa fa-whatsapp"></i> : 081316146399</a> <span style="color:white">|</span>
                    <a href="https://www.linkedin.com/in/bayu-wardana-374a94181/"><i class="fa fa-linkedin-square"></i> My-Linkedin</a> <span style="color:white">|</span>
                    <a href="https://github.com/bayualexandria"><i class="fa fa-github"></i> My-Github</a>

                </div>
            </div>
            <div class="row" id="hr-footer">
                <div class="col-sm text-center">
                    <p class="p-footer">&copy;Copyright 2019 | build with by. <a href="http://alexandriabayu.blogspot.com">b@yu4lex@ndr!4</a>.</p>
                </div>
            </div>
        </div>

    </footer>

    <script src="<?= base_url('asset/');?>bootstrap/js/jquery-3.3.1.js"></script>
    <script src="<?= base_url('asset/');?>bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.page-scroll').on('click', function(e) {

            var tujuan = $(this).attr('href');
            var elemenTujuan = $(tujuan);

            //jumbtoton
            $('body').animate({
                scrollTop: elemenTujuan.offset().top - 50
            }, 850);

            e.preventDefault();
        });

        // parallax
        //about
        $(window).on('load', function() {
            $('.pKiri').addClass('pMuncul');
            $('.pKanan').addClass('pMuncul');
        });
        $(window).scroll(function() {
            var wScroll = $(this).scrollTop();

            $('.jumbotron img').css({
                'transform': 'translate(0px, ' + wScroll / 4 + '%)'
            });

            $('.jumbotron h1').css({
                'transform': 'translate(0px, ' + wScroll / 2 + '%)'
            });

            $('.jumbotron p').css({
                'transform': 'translate(0px, ' + wScroll / 1.2 + '%)'
            });

            //portofolio
            if (wScroll > $('.portofolio').offset().top - 200) {
                $('.portofolio .thumbnail').each(function(i) {
                    setTimeout(function() {
                        $('.portofolio .thumbnail').eq(i).addClass('muncul');
                    }, 300 * (i + 1));
                });

            }

        });
        $(function() {
            $('#gallery a').lightBox();
        });
        const materialbox = document.querySelectorAll('#materialboxed');
        M.Materialbox.init(materialbox);
    </script>
</body>

</html>