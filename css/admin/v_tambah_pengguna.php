<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>tambah pengguna Baru</title>
</head>

<body>
     <?php include "navbar.php" ?>
     <div class="container">
          <h1>Tambah Pengguna Baru</h1>
          <div class="Container m-3">
               <form action="m_tambah_pengguna.php" method="post">
                    <table>
                         <tr>
                              <td>Nama</td>
                              <td>:</td>
                              <td><input type="text" name="nama_pengguna" id="" class="form-control"></td>
                         </tr>
                         <tr>
                              <td>Username</td>
                              <td>:</td>
                              <td><input type="text" name="username_pengguna" id="" class="form-control"></td>
                         </tr>
                         <tr>
                              <td>Password</td>
                              <td>:</td>
                              <td><input type="text" name="password_pengguna" id="" class="form-control"></td>
                         </tr>
                         <tr>
                              <td>Status</td>
                              <td>:</td>
                              <td> <select name="status" id="" form="select">
                                        <option value="Administrator">Administrator</option>
                                        <option value="Petugas">Petugas</option>
                                   </select></td>
                         </tr>
                         <tr>
                              <td></td>
                              <td></td>
                              <td><input type="submit" value="simpan" class="btn btn-outline-success"></td>
                              <script src="../js/bootstrap.min.js"></script>
                         </tr>
                    </table>
          </div>
          </form>
</body>

</html>