<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="bg-light rounded p-5">
            <form action="" method="POST" >
                <h4 class="mb-4 text-center fs-4">Form Tambah Data Prodi</h4>
                <form>
                <div class="form-floating mb-4">
                        <input type="text" name="nama" value="<?=set_value('nama');?>" class="form-control fs-5" id="nama" placeholder="">
                        <label for="floatingInput2">Nama Prodi</label>
                        <?=form_error('nama','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="ruangan" value="<?=set_value('ruangan');?>" class="form-control fs-5" id="ruangan" placeholder="">
                        <label for="floatingInput1">Ruangan</label>
                        <?=form_error('ruangan','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="jurusan" value="<?=set_value('jurusan');?>" class="form-control fs-5" id="jurusan" placeholder="">
                        <label for="floatingInput2">Jurusan</label>
                        <?=form_error('ruangan','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="akreditasi" value="<?=set_value('akreditasi');?>" class="form-control fs-5" id="akreditasi" placeholder="">
                        <label for="floatingInput3">Akreditasi</label>
                        <?=form_error('akreditasi','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="nama_kaprodi" value="<?=set_value('nama_kaprodi');?>" class="form-control fs-5" id="nama_kaprodi" placeholder="">
                        <label for="floatingInput4">Nama Kaprodi</label>
                        <?=form_error('nama_kaprodi','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="tahun_berdiri" value="<?=set_value('tahun_berdiri');?>" class="form-control fs-5" id="tahun_berdiri" placeholder="">
                        <label for="floatingInput5">Tahun Berdiri</label>
                        <?=form_error('tahun_berdiri','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="output_lulusan" value="<?=set_value('output_lulusan');?>" class="form-control fs-5" id="output_lulusan" placeholder="">
                        <label for="floatingInput6">Output Lulusan</label>
                        <?=form_error('output_lulusan','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                                <input type="file" class="custom-file-input form-control" name="gambar" id="gambar">
                            </div>
                        </div>
                    <a href="base_url('Prodi')" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah"
                            class="btn btn-primary float-right">Tambah Prodi</button>
                </form>
            </div>
        </div>
    </div>
</div>
