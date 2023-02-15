<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>daftar seminar</title>
</head>

<style>
   .container {
      width: 500px;
      border: solid 1px black;
      padding: 5px;
   }

   p {
      text-align: justify;
   }

   td {
      padding-right: 2rem;
   }
</style>

<body>
   <center>
      <div style="border: solid 1px black ; padding:25px ; display:inline-block">
         <h1>Daftar Semminar</h1>

         <form action="<?= base_url('seminar/daftar'); ?>" method="post">
            <table>
               <tr>
                  <td>Nama Lengkap</td>
                  <td><input type="text" name="nama"></td>
                  <?= form_error('name') ?>
                  <input type="hidden" name="id_seminar" value="<?= $this->uri->segment('3') ?>">
               </tr>
               <tr>
                  <td>NIM</td>
                  <td><input type="text" name="nim"></td>
                  <?= form_error('nim') ?>
               </tr>
               <tr>
                  <td>Email</td>
                  <td><input type="email" name="email"></td>
                  <?= form_error('email') ?>
               </tr>
               <tr>
                  <td>No Telepon</td>
                  <td><input type="text" name="no_tlp"></td>
                  <?= form_error('no_tlp') ?>
               </tr>
               <tr>
                  <td>Program Studi</td>
                  <td><input type="text" name="program_studi"></td>
                  <?= form_error('program_studi') ?>
               </tr>
               <tr>
                  <td>Semester</td>
                  <td>
                     <select name="semester" id="">
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                     </select>
                  </td>
                  <?= form_error('semester') ?>
               </tr>
               <tr>
                  <td>Asal Kampus</td>
                  <td>
                     <select name="kampus" id="">
                        <option value="karawang">Karawang</option>
                        <option value="cikampek">Cikampek</option>
                     </select>
                  </td>
                  <?= form_error('kampus') ?>
               </tr>
               <tr>
                  <td>

                  </td>
                  <td><input type="submit" value="Daftar"></td>
               </tr>
            </table>
         </form>
      </div>
   </center>
</body>

</html>