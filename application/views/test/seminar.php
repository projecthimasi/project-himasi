<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=], initial-scale=1.0">
   <title>Seminar</title>
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
      <div class="container">
         <h1>Daftar Seminar</h1>
         <img src="https://marketplace.canva.com/EAFPRbgH4A4/1/0/1600w/canva-ungu-gradien-moderen-acara-seminar-nasional-banner-n6jNStf9Q_U.jpg" alt="" width="100%">
         <h3><?= $seminar['tema']; ?></h3>
         <p><?= $seminar['deskripsi']; ?></p>
         <table>

            <tr>
               <td>Pembicara</td>
               <td><?= $seminar['pembicara']; ?></td>
            </tr>
            <tr>
               <td>Moderator</td>
               <td><?= $seminar['moderator']; ?></td>
            </tr>
            <tr>
               <td>Waktu</td>
               <td>Senin, 25 Januari 2023 pukul: 09.00 WIB - Seleai</td>
            </tr>
            <tr>
               <td>tempat</td>
               <td>Aula Kampus BSI Karawang, Lt.4 (pake tangga)</td>
            </tr>
         </table>
         <br><br>
         <button><a href="<?= base_url('seminar/daftar'); ?>/<?= $seminar['id']; ?>">Daftar</a></button>

      </div>
   </center>
</body>

</html>