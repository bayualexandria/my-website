<div class="dashboard-wrapper">
    <div class="dashboard-influence">
        <div class="container-fluid dashboard-content">
            <!-- Content Header (Page header) -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2">Infulencer Dashboard Template </h3>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"><?= $menu; ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> <?= $title; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.content -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-21 col-sm-12 col-12">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">
                                <h3 class="card-title">Data <?= $title; ?></h3>
                            </div>
                            <div class="card-body">
                                <?= form_open_multipart('Content/update'); ?>
                                <input type="hidden" name="id_blog" value="<?= $blog['id_blog']; ?>">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Content Title" required value="<?= $blog['title']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Content Judul" required value="<?= $blog['judul']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="isi" id="content" placeholder="Content Isi" rows="10"><?= $blog['isi']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <select name="id_category" id="id_category" class="form-control" required>
                                            <option value="">Select Menu</option>
                                            <?php foreach ($category as $k) : ?>
                                                <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="picture">Picture</label>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('asset/img/img-host/blog/') . $blog['image']; ?>" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="cusom-file col-sm-3">
                                                    <input type="file" class="custom-file-input" name="image" id="image">
                                                    <label for="image" class="custom-file-label"><small class="pt-2" style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"> Choose file</small></label>
                                                </div>
                                                Max 2 Mega Bytes
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
                                            <label for="is_active" class="form-check-label">
                                                Active?
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer md-3">
                                    <a href="<?= base_url(); ?>Content" type="button" class="btn bg-silver" data-dismiss="modal"> <i class="glyphicon glyphicon-arrow-left"></i> Close</a>
                                    <button class="btn bg-blue" type="submit"> <i class="glyphicon glyphicon-plus"></i> Update to data</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>