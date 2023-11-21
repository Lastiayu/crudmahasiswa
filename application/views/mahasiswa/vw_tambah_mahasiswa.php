<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="bg-light rounded p-5">
            <form action="" method="POST">
                <h4 class="mb-4 text-center fs-4">Form Tambah Data Mahasiswa</h4>
                <div class="form-floating mb-4">
                        <input type="text" name="nama" value="<?=set_value('nama');?>" class="form-control fs-5" id="name" placeholder="">
                        <?=form_error('nama','<small class="text-danger pl-3">','</small>');?>
                        <label for="floatingInput1">Nama Mahasiswa</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="nim" value="<?=set_value('nim');?>" class="form-control fs-5" id="nim" placeholder="">
                    <label for="floatingInput2">NIM Mahasiswa</label>
                    <?=form_error('nim','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-floating mb-4">
                    <select name="jenis_kelamin" value="<?=set_value('jenis_kelamin');?>" class="form-select fs-5" id="jenis_kelamin" aria-label="Floating label select example">
                        <option value="" selected disabled>Jenis Kelamin</option>
                        <option value="Laki Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <label for="floatingSelect1">Jenis Kelamin</label>
                    <?=form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-floating mb-4">
                    <input type="email" name="email" value="<?=set_value('email');?>" class="form-control fs-5" id="email" placeholder="">
                    <label for="floatingInput3">Email Mahasiswa</label>
                    <?=form_error('email','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-floating mb-4">
                <label for="floatingSelect2">Prodi</label>
                    <select name="prodi" value="<?=set_value('prodi');?>" class="form-select fs-5" id="prodi" aria-label="Floating label select example">
                        <option value="">Pilih Prodi</option>
                        <?php foreach ($prodi as $p) : ?>
                            <option value="<?=$p['id']; ?>"><?= $p['nama']; ?></option>
                            <?php endforeach; ?>
                            <?=form_error('prodi','<small class="text-danger pl-3">','</small>');?>
                    </select>
                    
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="asal_sekolah" value="<?=set_value('asal_sekolah');?>" class="form-control fs-5" id="asal_sekolah" placeholder="">
                    <label for="floatingInput4">Asal Sekolah</label>
                    <?=form_error('asal_sekolah','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="no_hp" value="<?=set_value('no_hp');?>" class="form-control fs-5" id="no_hp" placeholder="">
                    <label for="floatingInput5">No HP</label>
                    <?=form_error('no_hp','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="alamat" value="<?=set_value('alamat');?>" class="form-control fs-5" id="alamat" placeholder="">
                    <label for="floatingInput6">Alamat</label>
                    <?=form_error('alamat','<small class="text-danger pl-3">','</small>');?>
                </div>
                <a href="base_url('Mahasiswa')" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah"
                            class="btn btn-primary float-right">Tambah Mahasiswa</button>
                </form>
            </div>
        </div>
    </div>
</div>