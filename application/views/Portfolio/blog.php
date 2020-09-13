<!--/ Section Blog Star /-->
<section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Blog
                    </h3>
                    <p class="subtitle-a">
                        This blog hosting updated for time it.
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $queryContent = "SELECT * FROM blog JOIN category ON `blog`.`id_category`=`category`.`id` WHERE `blog`.`id_category`=`category`.`id` AND `blog`.`is_active`=1 ORDER BY `blog`.`date_created` DESC LIMIT 6";
            $Content = $this->db->query($queryContent)->result_array(); ?>
            <?php foreach ($Content as $c) : ?>
                <div class="col-md-4">
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
    </div>
</section>
<!--/ Section Blog End /-->