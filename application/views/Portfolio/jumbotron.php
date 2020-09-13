<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url(<?= base_url('asset/'); ?>User/img/inspirasi1.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <!-- <img src="<?= base_url('asset/'); ?>dist/img/bayu.jpg" class="img-circle" alt=""> -->
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="intro-title mb-4">I am Bayu
                    Wardana</h1>
                <p class="intro-subtitle"><span class="text-slider-items">
                        <?php foreach ($skill as $s) : ?>
                        <?= $s['name_skill'];?>,
                        <?php endforeach; ?>
                    </span><strong class="text-slider"></strong></p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->