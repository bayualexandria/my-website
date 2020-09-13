<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(<?= base_url('asset/'); ?>User/img/majt.JPG)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Profile Details</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('Portfolio'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Profile</li>
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
                <div class="card">
                    <div class="card-header" style="height:4rem;">
                        <div class="socials pt-0 d-inline">
                            <a href="" class="ico-circle" data-toggle="collapse" data-target="#user"><i class="ion-person"></i></a>
                            <div class="float-right" style="margin-top:-2.5rem;">
                                <a href="<?= base_url('index.php/Portfolio/CV'); ?>" target="_blank" class="ico-circle"><i class="ion-printer"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body collapse show" id="user">
                        <div class="row justify-content-center">
                            <div class="col-sm-2 col-md-2">
                                <div class="about-img ">
                                    <img src="<?= base_url('asset/'); ?>img/img-host/bayu.jpg" class="img-fluid rounded b-shadow-a" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-4">
                                <div class="about-info">
                                    <p><span class="title-s">Name: </span> <span><?= $cv['full_name']; ?></span></p>
                                    <p><span class="title-s">Date: </span> <span>Biak, 25 Agustust 1995</span></p>
                                    <p><span class="title-s">Gender: </span> <span><?= $cv['gender']; ?></span></p>
                                    <p><span class="title-s">Religion: </span> <span><?= $cv['religion']; ?></span></p>
                                    <?php $lahir = new DateTime("1995-08-25");
                                    $hari_ini = new DateTime();

                                    $diff = $hari_ini->diff($lahir); ?>

                                    <p><span class="title-s">Birth: </span> <span><?= $diff->y; ?> Years Old</span></p>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-4">
                                <div class="about-info">
                                    <p class="pb-5"><span class="title-s">Address Now: </span> <span class="text-justify position-absolute pl-1"><?= $cv['address']; ?></span></p><br>
                                    <p><span class="title-s">Phone: </span> <span><?= $cv['phone']; ?></span></p>
                                    <p><span class="title-s">Email: </span> <span><?= $cv['email']; ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);height:4rem;">
                        <div class="socials pt-0">
                            <a href="" class="ico-circle" data-toggle="collapse" data-target="#university"><i class="ion-university"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse" id="university">
                        <div class="row justify-content-center">
                            <div class="col-sm-8 col-md-5">
                                <div class="about-info">
                                    <p><span class="title-s">University Name: </span> <span><?= $education['name_education']; ?></span></p>
                                    <p><span class="title-s">Fakulty: </span> <span class="position-absolute"><?= $education['faculty']; ?></span></p>
                                    <p><span class="title-s">Study Program: </span> <span><?= $education['study_program']; ?></span></p>
                                    <p><span class="title-s">Title: </span> <span><?= $education['title']; ?></span></p>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-5">
                                <div class="about-info">
                                    <p><span class="title-s">Address: </span> <span class="text-justify position-absolute pl-1"><?= $education['address_education']; ?></span></p>
                                    <p><span class="title-s">Phone: </span> <span>(<?= $education['no_telp']; ?></span></p>
                                    <p><span class="title-s">Email: </span> <span><?= $education['email_education']; ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);height:4rem;">
                        <div class="socials pt-0">
                            <a href="" class="ico-circle" data-toggle="collapse" data-target="#gear"><i class="ion-ios-gear"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse" id="gear">
                        <div class="row justify-content-center">
                            <?php foreach ($skill as $s) : ?>
                                <div class="col-sm-5 col-md-5">
                                    <p><span class="title-s"><?= $s['name_skill']; ?></span></p>
                                </div>
                                <div class="col-sm-5 col-md-5">
                                    <div class="progress">
                                        <div class="progress-bar text-right" role="progressbar" style="width: <?= $s['ranting']; ?>%;" aria-valuenow="<?= $s['ranting']; ?>" aria-valuemin="0" aria-valuemax="100"><?= $s['ranting']; ?>%</div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="card-footer" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);height:4rem;">
                        <div class="socials pt-0">
                            <a href="" class="ico-circle" data-toggle="collapse" data-target="#basketball"><i class="ion-ios-basketball"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse" id="basketball">
                        <div class="row justify-content-center">
                            <div class="col-sm-8 col-md-3">
                                <div class="about-info">
                                    <p><span class="title-s">Hobby: </span></p>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-5">
                                <div class="about-info">
                                    <p> <span>Jogging</span></p>
                                    <p><span>Swimming</span></p>
                                    <p><span>Write to Word My Self</span></p>
                                    <p><span>Write to Program Coding</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);height:4rem;">
                        <div class="socials pt-0">
                            <a href="" class="ico-circle" data-toggle="collapse" data-target="#folder"><i class="ion-android-folder"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse" id="folder">
                        <div class="row justify-content-center">
                            <div class="col-md-3 col-sm-3">
                                <div class="socials">
                                    <ul>
                                        <li><a href="#" onclick="Swal.fire('Document Data Private','No access, its data private','error')"><span class="ico-circle"><i class="ion-android-document"></i></span></a></li>
                                        <li><a href="#" onclick="Swal.fire(' Music Data Private','No access, its data private','error')"><span class="ico-circle"><i class="ion-ios-musical-note"></i></span></a></li>
                                        <li><a href="#" onclick="Swal.fire('Picture Data Private','No access, its data private','error')"><span class="ico-circle"><i class="ion-images"></i></span></a></li>
                                        <li><a href="#" onclick="Swal.fire('Video Data Private','No access, its data private','error')"><span class="ico-circle"><i class="ion-ios-videocam"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>