<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(<?= base_url('asset/'); ?>User/img/majt.JPG)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">All Materi</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">All Materi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
        <div class="row">
            <?php foreach ($kategori as $k) : ?>
                <div class="col-md-3 col-sm-2">
                    <div class="service-box">
                        <a href="<?= base_url('index.php/Portfolio/getArticleById/'); ?><?= $k['id']; ?>">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="<?= $k['icon']; ?>"></i></span>
                            </div>
                        </a>
                        <div class="service-content">
                            <h4 class="s-title"><?= $k['kategori']; ?></h4>
                            <div class="counter-num text-center text-small">
                                <?php $id = $k['id'];
                                $query = "SELECT * FROM `blog` JOIN `category` ON `blog`.`id_category`=`category`.`id` WHERE `blog`.`id_category`=$id";
                                $Row = $this->db->query($query)->num_rows(); ?>
                                <p class="counter color-a font-9"><?= $Row; ?></p>
                                <span class="counter-text">TOTAL MATERI</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="pt-5">
            <?= $this->pagination->create_links(); ?>
        </div>
        <!-- <h5 class="text-center">Result : <?= $total_rows; ?></h5> -->
    </div>
</section>
<!--/ Section Blog-Single End /-->

<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(<?= base_url('asset/'); ?>User/img/majt.JPG)">
    <div class="overlay-mf"></div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>b@yu4lex@ndr!4</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                        -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--/ Section Contact-footer End /-->