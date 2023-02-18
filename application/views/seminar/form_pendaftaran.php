<div class="container" id="form">
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card shadow">
            <div class="card-body">

               <h2 class="card-title text-center mb-4">
                  Form Pendaftaran
               </h2>
               <form action="" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-floating mb-3">
                           <input type="text" name="nama" class="form-control" id="nama">
                           <label for="nama">Nama Lengkap</label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-floating mb-3">
                           <input type="text" name="nim" class="form-control" id="nim">
                           <label for="nim">No. Induk mahasiswa</label>
                        </div>

                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-floating mb-3">
                           <select class="form-select" name="semester" id="semester" aria-label="Floating label select example">
                              <option selected>-</option>
                              <?php for ($i = 1; $i <= 5; $i++) { ?>
                                 <option value="<?= $i; ?>">Semester <?= $i; ?></option>
                              <?php } ?>
                           </select>
                           <label for="semester">Semester</label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-floating mb-3">
                           <select class="form-select" name="program_studi" id="prodi" aria-label="Floating label select example">
                              <option selected>-</option>
                              <option value="Sistem Informasi">Sistem Informasi</option>
                              <option value="Sistem Informasi Akuntansi">Sistem Informasi Akuntansi</option>
                           </select>
                           <label for="prodi">Program Studi</label>
                        </div>
                     </div>
                  </div>

                  <div class="form-floating mb-3">
                     <select class="form-select" name="kampus" id="kampus" aria-label="Floating label select example">
                        <option selected>-</option>
                        <option value="Cikampek">Kampus Cikampek</option>
                        <option value="Karawang">Kampus Karawang</option>
                     </select>
                     <label for="kampus">Asal kampus</label>
                  </div>


                  <div class="form-floating mb-3">
                     <input type="email" name="email" class="form-control" id="email">
                     <label for="email">Email address</label>
                  </div>
                  <div class="d-grid gap-2 mt-5">
                     <button class="btn btn-primary" type="submit">Kirim</button>
                  </div>
               </form>

            </div>
         </div>
      </div>
   </div>
</div>