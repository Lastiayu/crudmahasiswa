<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="bg-light rounded p-5">
            <form action="" method="POST">
                    <h4 class="mb-4 text-center fs-4">Form Edit Data Prodi</h4>
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                            <div class="form-floating mb-4">
                                <input type="text" name="nama" value="<?= $prodi['nama']; ?>" class="form-control fs-5"
                                    id="nama" placeholder="">
                                    <?=form_error('nama','<small class="text-danger pl-3">','</small>');?>
                                <label for="floatingInput2">Nama Prodi</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>"
                                    class="form-control fs-5" id="ruangan" placeholder="">
                                    <?=form_error('ruangan','<small class="text-danger pl-3">','</small>');?>
                                <label for="floatingInput1">Ruangan</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>"
                                    class="form-control fs-5" id="jurusan" placeholder="">
                                    <?=form_error('jurusan','<small class="text-danger pl-3">','</small>');?>
                                <label for="floatingInput2">Jurusan</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" name="akreditasi" value="<?= $prodi['akreditasi']; ?>"
                                    class="form-control fs-5" id="akreditasi" placeholder="">
                                    <?=form_error('akreditasi','<small class="text-danger pl-3">','</small>');?>
                                <label for="floatingInput3">Akreditasi</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>"
                                    class="form-control fs-5" id="nama_kaprodi" placeholder="">
                                    <?=form_error('nama_kaprodi','<small class="text-danger pl-3">','</small>');?>
                                <label for="floatingInput4">Nama Kaprodi</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>"
                                    class="form-control fs-5" id="tahun_berdiri" placeholder="">
                                    <?=form_error('tahun_berdiri','<small class="text-danger pl-3">','</small>');?>
                                <label for="floatingInput5">Tahun Berdiri</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>"
                                    class="form-control fs-5" id="output_lulusan" placeholder="">
                                    <?=form_error('output_lulusan','<small class="text-danger pl-3">','</small>');?>
                                <label for="floatingInput6">Output Kelulusan</label>
                            </div>
                            <div class="form-group">
                            <img src="<?= base_url('assets/production/images/prodi/') . $prodi['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar','<small class="text-danger pl-3>', '</small>'); ?>
                            </div>
                        </div>
                        <br><br>
                        <a href="base_url('Prodi')" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah"
                            class="btn btn-primary float-right">Tambah Prodi</button>
                    </form>
            </div>
        </div>
    </div>
</div>