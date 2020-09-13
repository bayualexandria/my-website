<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(<?= base_url('asset/'); ?>User/img/majt.JPG)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Portfolio Details</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('Portfolio'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Portfolio</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="about-img">
                                        <img src="<?= base_url('asset/'); ?>img/img-host/bayu.jpg" class="img-fluid rounded b-shadow-a" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info">
                                        <p><span class="title-s">Name: </span> <span>Bayu Wardana</span></p>
                                        <p><span class="title-s">Profile: </span> <span>Front End Programmer</span></p>
                                        <p><span class="title-s">Email: </span> <span>wardanabayu455@gmail.com</span></p>
                                        <p><span class="title-s">Phone: </span> <span>0813-1614-6399</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="pKiri mt-5 text-justify">
                                <div class="pKiri title-s">Skill</div>
                                <?php foreach ($skill as $s) : ?>
                                <p class="pKiri mt-4"><?= $s['name_skill'];?></p>
                                    <div class="progress">
                                        <div class="pKiri progress-bar text-right" role="progressbar" style="width: <?= $s['ranting'];?>%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><?= $s['ranting'];?>%</div>
                                    </div>
                                    <div class="card-text text-center" id="headingOne">
                                        <a href="" style="text-decoration:none;" class="fas fa-chevron-down" data-toggle="collapse" data-target="#<?= $s['#'];?>" aria-expanded="false" aria-controls="Web Programming">
                                        </a>
                                    </div>
                                    <div id="<?= $s['#'];?>" class="collapse mt-2">
                                        <h5><b><?= $s['name_skill'];?></b></h5>
                                        <p class="text-justify"><?= $s['status'];?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-me pt-4 pt-md-0">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        About me
                                    </h5>
                                </div>
                                <p class="lead text-justify">
                                    Hai nama saya Bayu Wardana, Saya memiliki keahlian dan ingin berkembang dalam mempelajari Jaringan Komputer serta Server dan pemrograman Web-Freamwork.
                                </p>
                                <p class="lead text-justify">
                                    Karena itu saya tetap belajar dan terus belajar untuk bisa menjadi seorang programmer yang handal agar kelak dikemudian hari bisa memberikan ilmu yang saya peroleh kepada orang lain
                                </p>
                                <p class="lead text-justify">
                                    Meskipun saya tidak terlalu ahli dalam hal programmer, tapi saya mempunyai minat dan semangat yang tinggi untuk menjadi seorang programmer yang handal.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>