<!DOCTYPE html>
<html>

<head>
  <title>Data Pendaftar</title>
  <!-- Load Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <center>
      <h1 class="m-5">Data Pendaftar</h1>
    </center>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Lengkap</th>
          <th>Email</th>
          <th>Alamat</th>
          <th>Telepon</th>
        </tr>
      </thead>
      <tbody>
        <!-- <tr>
                    <td>Fakhirul</td>
                    <td>fakhirul@gmail.com</td>
                    <td>Depok</td>
                    <td>+62878555169</td>
                </tr>
                <tr>
                    <td>Rul</td>
                    <td>rul@gmail.com</td>
                    <td>Bogor</td>
                    <td>+62856555635</td>
                </tr> -->

        <?php
                  /* Task 2
                    Tangkap dan tampilkan data dari form_daftar.
                    Berikan error handling
                  */
                  if (isset($_POST['submit'])) {
                    $no = 0;
                    $no = $no+1;
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];

                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>$nama</td>";
                    echo "<td>$email</td>";
                    echo "<td>$alamat</td>";
                    echo "<td>$telepon</td>";
                    echo "</tr>";
                    
                  } else {
                    echo "
                    <div class='alert alert-danger m-3' role='alert'>
                        Data Belum di Masukkan, Silahkan Masukkan dulu melalui FORM DAFTAR <a href='form_daftar.php'>disini.</a>
                    </div>
                    ";
                  }
				     ?>
      </tbody>
    </table>
  </div>
</body>

</html>