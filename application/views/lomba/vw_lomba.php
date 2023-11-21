<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <h1 class="h3 mb-5 text-light green-800">Halaman Peserta</h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <a href="<?= base_url() ?>index.php/Lomba/tambah" class="btn btn-info mb-5">Tambah Peserta</a>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
    <?= $this->session->flashdata('message'); ?>
      <table class="table text-white">
        <thead>
          <tr>
            <th>NO</th>
            <th>Nama Peserta</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Jenis Perlombaan</th>
            <th>Asal Sekolah</th>
            <th>No Telpon</th>
            <th>Asal Kota</th>
            <th>Sosial Media</th>
            <th>Share</th>
            <th>Follow</th>
            <th>KTM</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
          <?php foreach ($lomba as $us) : ?>
          <tr>
            <td><?=$i; ?></td>
            <td><?=$us['nama']; ?></td>
            <td><?=$us['jenis_kelamin']; ?></td>
            <td><?=$us['email']; ?></td>
            <td><?=$us['jenis_lomba']; ?></td>
            <td><?=$us['asal_sekolah']; ?></td>
            <td><?=$us['no_telp']; ?></td>
            <td><?=$us['asal_kota']; ?></td>
            <td><?=$us['sosial_media']; ?></td>
            <td><img src="<?= base_url('assets/production/images/lomba/') . $us['share']; ?>" style="width: 100px;" class="img-thumbnail"></td>
            <td><img src="<?= base_url('assets/production/images/lomba/') . $us['follow']; ?>" style="width: 100px;" class="img-thumbnail"></td>
            <td><img src="<?= base_url('assets/production/images/lomba/') . $us['ktm']; ?>" style="width: 100px;" class="img-thumbnail"></td>
            <td>
              <a href="<?= base_url('Lomba/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
              <a href="<?= base_url('Lomba/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
            </td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>