<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card m-5" width="500px">
                <div class="card-header text-white">
                    <div class="p-5 pt-1 mt-5 text-center">
                        <h3 class="border-bottom">Daftar Seminar</h1>
                    </div>
                </div>
                <div class="card-body">


                    <form action="">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="NIM">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="Email">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">No.Telepon</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="No.Telepon">
                        </div>
                        <br>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Nama Seminar</option>
                            <option value="1">Seminar 1</option>
                            <option value="2">Seminar 2</option>
                        </select>
                        <br>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Metode Pembayaran</option>
                            <option value="1">Bank 1</option>
                            <option value="2">Bank 2</option>
                        </select>
                        <br>
                        <center>
                            <div class="mx-auto">
                                <a href="<?= base_url('landing_page/invoice'); ?>" class="btn text-white">Daftar</a>
                            </div>
                        </center>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>