 <div class="dashboard-wrapper">
     <div class="dashboard-influence">
         <div class="container-fluid dashboard-content">
             <div class="row">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-1">
                     <div class="card">
                         <div class="card-header with-border">
                             <div class="row justify-content-center">
                                 <div class="col-sm-8">
                                     <h3 class="box-title"><?= $list; ?></h3>
                                 </div>
                                 <div class="col-sm-4 text-right">
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
                                         <th scope="col">Title</th>
                                         <th scope="col">Judul</th>
                                         <th scope="col">Active</th>
                                         <th scope="col">Date</th>
                                         <th scope="col">
                                             <a href="" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#add">
                                                 <i class="fas fa-plus"></i>
                                             </a>
                                         </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        foreach ($kategori as $b) : ?>
                                         <tr>
                                             <td><?= ++$start; ?></td>
                                             <td><?= $b['title']; ?></td>
                                             <td style="width:15rem;"><?= $b['judul']; ?></td>

                                             <td><?= $b['is_active']; ?></td>
                                             <td><?= date('d F Y', $b['date_created']); ?></td>
                                             <td class="text-center">
                                                 <a href="<?= base_url(); ?>Content/editBlog/<?= $b['id_blog']; ?>" class="btn btn-circle btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>

                                                 <a href="<?= base_url(); ?>Content/hapusBlog/<?= $b['id_blog']; ?>" class="btn btn-circle btn-sm btn-danger hapus"><i class="fas fa-trash"></i></a>

                                                 <a href="<?= base_url(); ?>Portfolio/getBlogById/<?= $b['id_blog']; ?>" class="btn btn-circle btn-sm btn-secondary" target="_blank"><i class="fas fa-eye"></i></a>
                                             </td>
                                         </tr>
                                     <?php endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                         <?= $this->pagination->create_links(); ?>
                         <div class="pt-5">
                             <?php if (empty($kategori)) : ?>
                                 <div class="text-center alert alert-danger" role="alert">
                                     Data Not Found!
                                 </div>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="modal fade" id="add">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Add New Users</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
             </div>
             <?= form_open_multipart('Content'); ?>
             <div class="modal-body">
                 <div class="form-group">
                     <input type="text" class="form-control" name="title" id="title" placeholder="Content Title" required>
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" name="judul" id="judul" placeholder="Content Judul" required>
                 </div>
                 <div class="form-group">
                     <label for="content">Content</label>
                     <textarea class="form-control" id="contents" name="isi" rows="3"></textarea>
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