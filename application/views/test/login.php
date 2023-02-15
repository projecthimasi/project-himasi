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
         <h1>Login</h1>
         <form action="<?= base_url('auth/cek_login'); ?>" method="post">
            <table>
               <tr>
                  <td>email</td>
                  <td><input type="text" name="email"></td>
                  <input type="hidden" name="id_seminar" value="<?= $this->uri->segment('3') ?>">
               </tr>
               <tr>
                  <td>password</td>
                  <td><input type="password" name="password"></td>
               </tr>
               <td></td>
               <td><input type="submit" value="Login"></td>
               </tr>
            </table>
         </form>
      </div>
   </center>
</body>

</html>