<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(<?= base_url('asset/'); ?>User/img/majt.JPG)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">All Blog</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">All Blog</li>
                </ol>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="sidebar-content">
                            <form method="POST" action="<?= base_url('index.php/Portfolio/getAllBlog'); ?>">
                                <div class="input-group">
                                    <input type="text" class="form-control" autofocus autocomplete="off" placeholder="Search for..." name="keyword">
                                    <span class="input-group-append">
                                        <input class="btn btn-secondary  btn-search" autocomplete="off" type="submit" name="submit" value="Search">
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
        <div class="col-md-12 ">
            <?php if (empty($list)) : ?>
                <div class="text-center alert alert-danger" role="alert">
                    Data Not Found!
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php foreach ($list as $c) : ?>
                <div class="col-md-4 show">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="<?= base_url('index.php/Portfolio/getBlogById/'); ?><?= $c['id_blog']; ?>"><img src="<?= base_url('asset/img/img-host/thumbnail/'); ?><?= $c['image'] ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category"><?= $c['title']; ?></h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="<?= base_url('index.php/Portfolio/getBlogById/'); ?><?= $c['id_blog']; ?>">See more blog</a></h3>
                            <p class="card-description">
                                <?= $c['judul']; ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-date">
                                <span class="ion-ios-clock-outline"></span> <?= date('l, d F Y', $c['date_created']); ?>
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