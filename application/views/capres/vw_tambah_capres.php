<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="bg-light rounded p-5">
                <form action="<?= base_url('Capres/upload'); ?>" method="POST">
                    <h4 class="mb-4 text-center fs-4">Form Tambah Data Capres</h4>
                    <div class="form-floating mb-4">
                        <input type="text" name="NIK" class="form-control fs-5" id="floatingInput1" placeholder="">
                        <label for="floatingInput1">NIK</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="Nama" class="form-control fs-5" id="floatingInput2" placeholder="">
                        <label for="floatingInput2">Nama</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="Asal" class="form-control fs-5" id="floatingInput2" placeholder="">
                        <label for="floatingInput2">Asal</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="Partai" class="form-control fs-5" id="floatingInput3" placeholder="">
                        <label for="floatingInput3">Partai</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="Pekerjaan" class="form-control fs-5" id="floatingInput3" placeholder="">
                        <label for="floatingInput3">Pekerjaan</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" name="Umur" class="form-control fs-5" id="floatingInput4" placeholder="">
                        <label for="floatingInput4">Umur</label>
                    </div>
                    <button type="submit" class="btn btn-primary fs-5">Tambah Capres</button>
                </form>
            </div>
        </div>
    </div>
</div>