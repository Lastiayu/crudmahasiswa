<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="bg-light rounded p-5">
                <form action="" method="POST" >
                    <h4 class="mb-4 text-center fs-4">Form Edit Peserta</h4>
                    <form>
                        <div class="form-floating mb-4">
                        <input type="hidden" name="id" value="<?= $lomba['id']; ?>">
                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control fs-5"
                                id="nama" placeholder="">
                            <label for="floatingInput2">Nama Peserta</label>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-4">
                            <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>"
                                class="form-select fs-5" id="jenis_kelamin" aria-label="Floating label select example">
                                <option value="" selected disabled>Jenis Kelamin</option>
                                <option value="Laki Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <label for="floatingSelect1">Jenis Kelamin</label>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" name="email" value="<?= set_value('email'); ?>"
                                class="form-control fs-5" id="email" placeholder="">
                            <label for="floatingInput3">Email Peserta</label>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-4">
                            <select name="jenis_lomba" value="<?= set_value('jenis_lomba'); ?>" class="form-select fs-5"
                                id="jenis_lomba" aria-label="Floating label select example">
                                <option value="" selected disabled>Jenis Perlombaan</option>
                                <option value="Laki Laki">Poster</option>
                                <option value="Perempuan">UI/UX</option>
                                <option value="Perempuan">Debat</option>
                                <option value="Perempuan">Programming</option>
                            </select>
                            <label for="floatingSelect1">Jenis Perlombaan</label>
                            <?= form_error('jenis_lomba', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="asal_sekolah" value="<?= set_value('asal_sekolah'); ?>"
                                class="form-control fs-5" id="asal_sekolah" placeholder="">
                            <label for="floatingInput1">Asal Sekolah</label>
                            <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="no_telp" value="<?= set_value('no_telp'); ?>"
                                class="form-control fs-5" id="no_telp" placeholder="">
                            <label for="floatingInput2">No Telpon</label>
                            <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="asal_kota" value="<?= set_value('asal_kota'); ?>"
                                class="form-control fs-5" id="asal_kota" placeholder="">
                            <label for="floatingInput3">Asal Kota</label>
                            <?= form_error('asal_kota', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="sosial_media" value="<?= set_value('sosial_media'); ?>"
                                class="form-control fs-5" id="sosial_media" placeholder="">
                            <label for="floatingInput4">Sosial Media (IG)</label>
                            <?= form_error('sosial_media', '<small class="text-danger pl-3">', '</small>'); ?>
                            <br>
                            <div class="form-group">
                                <label for="share">Bukti Share Poster</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="share" id="share">
                                    <?= form_error('share', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="follow">Bukti Follow Ig @theArcher.team</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="follow" id="follow">
                                    <?= form_error('follow', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ktm">Scan KTM</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="ktm" id="ktm">
                                    <?= form_error('ktm', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <a href="base_url('Lomba')" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                Peserta</button>
                    </form>
            </div>
        </div>
    </div>
</div>