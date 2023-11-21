<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <h1 class="h3 mb-5 text-light green-800">Halaman Calon Presiden</h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <a href="<?= base_url() ?>index.php/Capres/tambah" class="btn btn-info mb-5">Tambah Capres</a>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <table class="table text-white">
        <thead>
          <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Partai</th>
            <th>Pekerjaan</th>
            <th>Umur</th>

          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($capres as $us) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $us['NIK']; ?></td>
              <td><?= $us['Nama']; ?></td>
              <td><?= $us['Asal']; ?></td>
              <td><?= $us['Partai']; ?></td>
              <td><?= $us['Pekerjaan']; ?></td>
              <td><?= $us['Umur']; ?></td>
              <td>
                <a href="<?= base_url('Capres/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                <a href="<?= base_url('Capres/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>


              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>