<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="bg-light rounded p-5">
                <form action="" method="POST">
                    <h4 class="mb-4 text-center fs-4">Form Edit Data Mahasiswa</h4>
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-floating mb-4">
                            <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" class="form-control fs-5"
                                id="nama" placeholder="">
                                <?=form_error('nama','<small class="text-danger pl-3">','</small>');?>
                            <label for="floatingInput1">Nama Mahasiswa</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" class="form-control fs-5"
                                id="nim" placeholder="">
                                <?=form_error('nim','<small class="text-danger pl-3">','</small>');?>
                            <label for="floatingInput2">NIM Mahasiswa</label>
                        </div>
                        <div class="form-floating mb-4">
                            <select name="jenis_kelamin" class="form-select fs-5" id="jenis_kelamin"
                                aria-label="Floating label select example">
                                <option value="Laki Laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki Laki") {
                                    echo "selected";
                                } ?>> Laki Laki </option>
                                <option value="Perempuan" <?php if($mahasiswa['jenis_kelamin'] == "Perempuan") {
                                    echo "selected" ;
                                } ?>>Perempuan</option>
                            </select>
                            <?=form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>');?>
                            <label for="floatingSelect1">Jenis Kelamin</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" name="email" value="<?= $mahasiswa['email']; ?>"
                                class="form-control fs-5" id="email" placeholder="">
                                <?=form_error('email','<small class="text-danger pl-3">','</small>');?>
                            <label for="floatingInput3">Email Mahasiswa</label>
                        </div>
                        <div class="form-floating mb-4">
                            <select name="prodi" class="form-select fs-5"
                                id="prodi" aria-label="Floating label select example">
                                <?php foreach ($prodi as $p) : ?>
                                    <option value="<?= $p['id']; ?>" <?php if (
                                        $mahasiswa['prodi'] == $p['id']) {
                                            echo "selected";
                                        } ?>><?= $p['nama']; ?></option>
                                        <?php endforeach; ?>
                            </select>
                            <?=form_error('menu_id','<small class="text-danger pl-3">','</small>');?>
                            <label for="floatingSelect2">Program Studi</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>"
                                class="form-control fs-5" id="asal_sekolah" placeholder="">
                            <label for="floatingInput4">Asal Sekolah</label>
                            <?=form_error('asal_sekolah','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" class="form-control fs-5"
                                id="no_hp" placeholder="">
                                <?=form_error('no_hp','<small class="text-danger pl-3">','</small>');?>
                            <label for="floatingInput5">No HP</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>"
                                class="form-control fs-5" id="alamat" placeholder="">
                                <?=form_error('alamat','<small class="text-danger pl-3">','</small>');?>
                            <label for="floatingInput6">Alamat</label>
                        </div>
                        <a href="base_url('Mahasiswa')" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah"
                            class="btn btn-primary float-right">Tambah Mahasiswa</button>
                </form>
            </div>
        </div>
    </div>
</div>