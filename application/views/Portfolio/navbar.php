<!--/ Nav Star /-->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <!-- <div class="container"> -->
    <a class="navbar-brand js-scroll" href="<?= base_url('Portfolio'); ?>">
        <img src="<?= base_url('asset/'); ?>img/img-host/bayu.jpg" class="img-circle logo" alt="">
        Bayu Wardana
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?= base_url('Portfolio/getAllBlog'); ?>" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Portfolio/article'); ?>" class="nav-link">Materi</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Portfolio/profile'); ?>" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Portfolio/portfolio'); ?>" data-id="about" class="nav-link">Portfolio</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Portfolio/about'); ?>" class="nav-link">About</a>
            </li>
        </ul>
    </div>
    <!-- </div> -->
</nav>
<!--/ Nav End /-->