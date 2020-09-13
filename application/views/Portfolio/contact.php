<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(<?= base_url('asset/'); ?>User/img/majt.JPG)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Send Message Us
                                    </h5>
                                </div>
                                <div>
                                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
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
                                        <button type="submit" id="kirim" class="btn btn-primary">Kirim Pesan</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">
                                        Get in Touch
                                    </h5>
                                </div>
                                <div class="more-info">
                                    <p class="lead">
                                        Kontak dan media sosial yang saya punya untuk terhubung antar sesama pengguna, Silahkan tambahkan sesuai kontak dan media sosial yang digunakan.
                                    </p>
                                    <ul class="list-ico">
                                        <li><span class="ion-ios-location"></span> From Biak, Biak Numfor-Papua. Indonesia </li>
                                        <li><span class="ion-social-whatsapp"></span> 0813-1614-6399 </li>
                                        <li><span class="ion-email"></span> wardanabayu455@gmail.com </li>
                                    </ul>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="https://www.facebook.com/bayu.alexandria.315"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                                        <li><a href="https://www.instagram.com/bayualexandria13/"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                                        <li><a href="https://twitter.com/b4yu_4lex4ndri4"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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