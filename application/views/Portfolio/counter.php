<div class="section-counter paralax-mf bg-image" style="background-image: url(<?= base_url('asset/'); ?>User/img/coding.png)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">5</p>
                        <span class="counter-text">PROJECT COMPLETED</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-android-document"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">550</p>
                        <span class="counter-text">TOTAL FILES</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-university"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter-header">Bachelor of Computer Science</p>
                        <span class="counter-text"> Faculty of Information and Communication Technology</span>

                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-android-list"></i></span>
                    </div>
                    <div class="counter-num">
                        <?php $jumlah_blog = $this->Blog_model->jumlahBlog()->num_rows(); ?>
                        <p class="counter"><?= $jumlah_blog; ?></p>
                        <span class="counter-text">BLOG HOSTING</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>