<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(<?= base_url('asset/'); ?>User/img/majt.JPG)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Blog Details</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('index.php/Portfolio'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('index.php/Portfolio/getAllBlog'); ?>">All Blog</a>
                    </li>
                    <li class="breadcrumb-item active">Data</li>
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

            <div class="col-md-8">
                <?php $id_blog = $blog['id_blog'];
                $query = "SELECT `blog`.*,`category`.* FROM `blog` JOIN `category` ON `blog`.`id_category`=`category`.`id` WHERE `blog`.`id_blog`=$id_blog";
                $all = $this->db->query($query)->result_array(); ?>
                <div class="post-box">
                    <?php foreach ($all as $a) : ?>
                        <div class="post-thumb">
                            <img src="<?= base_url('asset/img/img-host/blog/'); ?><?= $a['image']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="post-meta">
                            <h1 class="article-title"><?= $a['judul']; ?></h1>
                            <ul>
                                <li>
                                    <span class="ion-ios-person"></span>
                                    <a href="#">Bayu Wardana</a>
                                </li>
                                <li>
                                    <span class="ion-pricetag"></span>
                                    <a href="#"><?= $a['title']; ?></a>
                                </li>
                                <li>
                                    <span class="ion-chatbox"></span>
                                    <a href="#comment"><?= $count; ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="article-content text-justify">
                        
                        <?= $a['isi'];?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="box-comments accordion" id="comment">
                    <div class="title-box-2">
                        <h4 class="title-comments title-left">Comments <?= $count; ?></h4>
                    </div>
                    <ul class="list-comments">
                        <?php foreach ($comment as $m) : ?>
                            <li>
                                <div class="comment-avatar">
                                    <img width="25%" src="<?= base_url('asset/User/img/comment/'); ?><?= $m['logo']; ?>" alt="">
                                </div>
                                <div class=" comment-details">
                                    <h6 class="comment-author"><?= $m['name']; ?></h6>
                                    <span class="text-muted" style="font-size:small;"><?= date('l, d F Y', $m['date_created']); ?></span>
                                    <p>
                                        <?= $m['mess']; ?>
                                    </p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                        <li>
                            <button class="btn btn-link" data-toggle="collapse" data-target="#comment1" aria-expanded="false" aria-controls="comment">Reply</button>
                        </li>

                        <div class="collapse" id="comment1" data-parent="#comment">
                            <div class=" card card-body">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" size="auto" name="name" id="name" placeholder="Your Name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" class="form-control" id="gender" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="mess">Messagge</label>
                                        <textarea class="form-control" name="mess" id="mess" cols="20" rows="10" placeholder="Yous Messagge" required></textarea>
                                    </div>
                                    <div class="justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm">Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </ul>


                </div>
                <div class="form-comments">
                    <div class="title-box-2">
                        <h3 class="title-left">
                            Leave a Reply
                        </h3>
                    </div>
                    <form class="mt-4" action="<?= base_url('index.php/Portfolio/pesan'); ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="name" id="nama" class="form-control" placeholder="Masukan Nama" data-rule="required">
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" required>
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telepon</label>
                            <input type="tel" name="telp" id="telp" class="form-control" placeholder="Masukan No Telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Message</label>
                            <textarea class="form-control" name="mess" id="mess" rows="5" placeholder="Masukan Pesan" required></textarea>
                        </div>
                        <button type="submit" name="send" id="kirim" class="btn btn-primary">Kirim Pesan</button>

                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget-sidebar">
                    <?php $queryContent = "SELECT * FROM blog JOIN category ON `blog`.`id_category`=`category`.`id` WHERE `blog`.`id_category`=`category`.`id` AND `blog`.`is_active`=1 ORDER BY `blog`.`date_created` DESC LIMIT 6";
                    $Content = $this->db->query($queryContent)->result_array(); ?>
                    <h5 class="sidebar-title">Recent Post</h5>
                    <?php foreach ($Content as $c) : ?>
                        <div class="sidebar-content">
                            <ul class="list-sidebar">
                                <li>
                                    <a href="<?= base_url('index.php/Portfolio/getBlogById/'); ?><?= $c['id_blog']; ?>"><?= $c['judul']; ?></a>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="widget-sidebar">
                    <h5 class="sidebar-title">Archives</h5>
                    <div class="sidebar-content">
                        <?php $query = "SELECT DISTINCT (date_created) FROM blog GROUP BY date_created DESC LIMIT 3";
                        $hasil = $this->db->query($query)->result_array(); ?>
                        <?php foreach ($hasil as $c) : ?>
                            <ul class="list-sidebar">
                                <li>
                                    <a><?= date(' F Y', $c['date_created']); ?></a>
                                </li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
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