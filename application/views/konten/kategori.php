<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header with-border">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <h3 class="box-title"><?= $list; ?></h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <form method="POST" action="<?= base_url('Content/index'); ?>">
                                <div class="input-group">
                                    <input type="text" class="form-control" autocomplete="off" placeholder="Search for..." name="keyword">
                                    <span class="input-group-append">
                                        <input class="btn btn-secondary  btn-search" autocomplete="off" type="submit" name="submit" value="Search">
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="flash-data" style="width:12rem;font-size:small;" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                <div class="card-body">
                    <table class=" table table-bordered table-responsive-md">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Categorie</th>
                                <th scope="col">Url</th>
                                <th scope="col">Active</th>
                                <th scope="col">
                                    <a href="" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#add">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($category as $c) : ?>
                                <tr>
                                    <td><?= ++$start; ?></td>
                                    <td><?= $c['kategori']; ?></td>
                                    <td style="width:15rem;"><?= $c['url']; ?></td>
                                    <td class="text-center">
                                        <?php if ($c['is_active'] == 1) : ?>
                                            <i class="badge badge-success">Aktif</i>
                                        <?php else : ?>
                                            <i class="badge badge-danger">Tidak Aktif</i>
                                        <?php endif; ?>
                                    </td>

                                    <td class="text-center">
                                        <a href="" class="btn btn-circle btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>

                                        <a href="" class="btn btn-circle btn-sm btn-danger hapus"><i class="fas fa-trash"></i></a>

                                        <a href="" class="btn btn-circle btn-sm btn-secondary" target="_blank"><i class="fas fa-eye"></i></a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New <?= $title; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <?= form_open_multipart('Content/categories'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Categorie Name">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Url">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Icon">
                </div>

                <div class="form-group">
                    <label for="">Picture</label>
                    <div class="custom-file row">
                        <div class="col-md-6 ml-3">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="is_active" class="form-check-label">
                        Is active?
                    </label>
                    <div class="row mt-2 ml-3">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="Yes" value="1" name="is_active" class="custom-control-input" checked>
                            <label class="custom-control-label" for="Yes">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="No" value="0" name="is_active" class="custom-control-input">
                            <label class="custom-control-label" for="No">No</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer md-3">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"> <i class="fas fa-arrow-left"></i> Close</button>
                <button class="btn btn-sm btn-success"> <i class="fas fa-plus"></i> Add to data</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->


</div>