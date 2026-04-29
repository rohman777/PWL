<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="section profile">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8 col-md-10">

            <div class="card">
                <div class="card-body pt-4">

                    <h5 class="card-title text-center">Profile Information</h5>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Username</label>
                        <div class="col-sm-8">
                            <?= $username; ?>
                            <span class="badge bg-danger"><?= $role; ?></span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <?= $email; ?>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Login Time</label>
                        <div class="col-sm-8">
                            <?= $login_time ? date('d M Y H:i', strtotime($login_time)) : '-'; ?>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <span class="badge bg-success">
                                <i class="bi bi-check-circle"></i> Sudah Login
                            </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>