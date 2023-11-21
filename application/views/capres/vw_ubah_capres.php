<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="bg-light rounded p-5">
                <form action="<?= base_url('Capres/update'); ?>" method="POST">
                    <h4 class="mb-4 text-center fs-4">Form Tambah Data Capres</h4>
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?= $capres['id']; ?>">
                        <div class="form-floating mb-4">
                            <input type="text" name="NIK" value="<?= $capres['NIK']; ?>" class="form-control fs-5"
                                id="floatingInput1" placeholder="">
                            <label for="floatingInput1">NIK</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="Nama" value="<?= $capres['Nama']; ?>" class="form-control fs-5"
                                id="floatingInput2" placeholder="">
                            <label for="floatingInput2">Nama</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="Asal" value="<?= $capres['Asal']; ?>" class="form-control fs-5"
                                id="floatingInput2" placeholder="">
                            <label for="floatingInput2">Asal</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="Partai" value="<?= $capres['Partai']; ?>" class="form-control fs-5"
                                id="floatingInput2" placeholder="">
                            <label for="floatingInput2">Partai</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="Pekerjaan" value="<?= $capres['Pekerjaan']; ?>" class="form-control fs-5"
                                id="floatingInput2" placeholder="">
                            <label for="floatingInput2">Pekerjaan</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="Umur" value="<?= $capres['Umur']; ?>"
                                class="form-control fs-5" id="floatingInput4" placeholder="">
                            <label for="floatingInput4">Umur</label>
                        </div>

                        <button type="submit" class="btn btn-primary fs-5">Tambah Mahasiswa</button>
                </form>
            </div>
        </div>
    </div>
</div>