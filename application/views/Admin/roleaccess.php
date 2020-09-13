<div class="dashboard-wrapper">
  <div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header">
              <h5>Role : <?= $role['role']; ?></h5>
              <div class="flash-data" style="width:12rem;font-size:small;" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            </div>
            <div class="card-body">
              <!-- <?= $this->session->flashdata('message'); ?> -->
              <table class="table table-bordered table-responsive-md">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Access</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($menu as $m) : ?>
                    <tr>
                      <th><?= $i; ?></th>
                      <th><?= $m['menu']; ?></th>
                      <th>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">

                        </div>
                      </th>

                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>