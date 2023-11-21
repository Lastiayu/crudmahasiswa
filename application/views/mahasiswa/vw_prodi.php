<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <h1 class="h3 mb-5 text-light green-800">Halaman Prodi</h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <a href="<?= base_url() ?>index.php/Prodi/tambah" class="btn btn-info mb-5">Tambah Prodi</a>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
    <?= $this->session->flashdata('message'); ?>
      <table class="table text-white">
        <thead>
          <tr>
            <th>NO</th>
            <th>Nama Prodi</th>
            <th>Ruangan</th>
            <th>Jurusan</th>
            <th>Akreditasi</th>
            <th>Nama Kaprodi</th>
            <th>Tahun Berdiri</th>
            <th>Output kelulusan</th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
          <?php foreach ($prodi as $us) : ?>
          <tr>
            <td><?=$i; ?></td>
            <td><?=$us['nama']; ?></td>
            <td><?=$us['ruangan']; ?></td>
            <td><?=$us['jurusan']; ?></td>
            <td><?=$us['akreditasi']; ?></td>
            <td><?=$us['tahun_berdiri']; ?></td>
            <td><?=$us['nama_kaprodi']; ?></td>
            <td><?=$us['output_lulusan']; ?></td>
            <td><?=$us['gambar']; ?></td>
            <td><img src="<?= base_url('assets/production/images/prodi/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
            <td>
              <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
              <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
            </td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>