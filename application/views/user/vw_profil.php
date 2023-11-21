<div class="container-fluid">
    <div class="text-center"> <!-- Menambahkan div dengan kelas text-center -->
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">
            <?= $judul; ?>
        </h1>
    </div>
    <div class="d-flex justify-content-center"> <!-- Menambahkan div dengan kelas d-flex justify-content-center untuk konten kartu -->
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/production/images/profile/') . $user['gambar']; ?>" class="card-img" alt="Profile Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $user['nama']; ?>
                        </h5>
                        <p class="card-text">
                            <?= $user['email']; ?>
                        </p>
                        <p class="card-text"><small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
