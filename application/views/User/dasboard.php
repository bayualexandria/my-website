<div class="dashboard-wrapper">
  <div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <?= $this->session->flashdata('message'); ?>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-8">
                    <h3 class="card-title">Data <?= $title; ?></h3>
                  </div>
                  <div class="col-md text-right">
                    <?php if ($user['role_id'] == 1) : ?>
                      <h6 style="font-weight: 700">Administrator</h6>
                    <?php else : ?>
                      <h6 style="font-weight: 900">User</h6>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md text-center">
                    <img src="<?= base_url('asset/img/' . $user['image']); ?>" alt="" class="img-profile rounded-circle w-25">
                    <h5 class="mt-2 font-bold"><?= $user['name']; ?></h5>
                    <p class="font-bold"><?= $user['email']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>