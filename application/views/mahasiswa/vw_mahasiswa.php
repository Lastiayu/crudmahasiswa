<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <h1 class="h3 mb-5 text-light green-800">Halaman Mahasiswa</h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <a href="<?= base_url() ?>index.php/Mahasiswa/tambah" class="btn btn-info mb-5">Tambah Mahasiswa</a>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <?= $this->session->flashdata('message'); ?>
      <table class="table text-white">
        <thead>
          <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Email</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($mahasiswa as $us) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $us['nama']; ?></td>
              <td><?= $us['nim']; ?></td>
              <td><?= $us['email']; ?></td>
              <td>
                <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="badge badge-warning">Detail</a>

              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>