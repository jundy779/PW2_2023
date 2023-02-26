<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>

<body>
  <div class="container-fluid responsive">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th width="450px">Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          /* Task 2
             Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */    
                  $daftar_nama_buah = 
                  [
                    [
                      'nama' => 'Apel',
                      'warna' => 'Green',
                      'harga' => 'Rp. 30.000,00/Kg',
                      'stok' => '20 Kg',
                      'deskripsi' => 'Apel hijau juga menyediakan vitamin B, lutein, zeaxanthin dan kalsium dalam dosis kecil, serta zat besi dan seng'  
                    ],
                    [
                      'nama' => 'Jeruk',
                      'warna' => 'Orange',
                      'harga' => 'Rp. 24.000,00/Kg',
                      'stok' => '15 Kg',
                      'deskripsi' => 'Mengonsumsi buah jeruk dapat membantu kamu mencegah kondisi anemia. Meskipun buah jeruk bukan sumber zat besi yang baik, tetapi jeruk menjadi sumber vitamin C.'  
                    ],
                    [
                      'nama' => 'Nanas',
                      'warna' => 'yellow',
                      'harga' => 'Rp. 15.000,00/Kg',
                      'stok' => '25 Kg',
                      'deskripsi' => 'Buah nanas mengandung sekitar 131 persen vitamin C harian yang dibutuhkan tubuh. Selain itu, nanas juga mengandung bromelain, suatu enzim yang dikenal dapat meringankan peradangan dan membantu penyerapan protein'  
                    ],
                    [
                      'nama' => 'Semangka',
                      'warna' => 'Red',
                      'harga' => 'Rp. 10.000,00/Kg',
                      'stok' => '50 Kg',
                      'deskripsi' => 'Semangka diperkaya dengan vitamin A dan C yang melimpah. Kedua zat tersebut berperan penting untuk mencegah dan membunuh sel kanker yang menyerang tubuh.'  
                    ],
                    [
                      'nama' => 'Blueberry',
                      'warna' => 'Blue',
                      'harga' => 'Rp. 80.000,00/Kg',
                      'stok' => '25 Kg',
                      'deskripsi' => 'Vitamin C dalam buah blueberry juga bertindak sebagai antioksidan serta meningkatkan produksi kolagen untuk mendapatkan kulit yang lebih halus dan sehat.'  
                    ],
                    [
                      'nama' => 'Pisang',
                      'warna' => 'Yellow',
                      'harga' => 'Rp. 15.000,00/Kg',
                      'stok' => '15 Kg',
                      'deskripsi' => 'Pisang kaya akan potasium, mineral yang penting bagi penjagaan fungsi jantung dan sirkulasi darah. Oleh sebab itu sirkulasi oksigen ke otak bisa terjamin dan stroke akibat tekanan darah tinggi bisa dicegah.                      '  
                    ],
                  ];

                  $id = 1;
                  foreach ($daftar_nama_buah as $daftar) {
                    echo "<tr>";
                    echo "<td> $id. </td>";
                    echo "<td> ". $daftar['nama'] ." </td>";
                    echo "<td> ". $daftar['warna'] ." </td>";
                    echo "<td> ". $daftar['stok'] ." </td>";
                    echo "<td> ". $daftar['harga'] ." </td>";
                    echo "<td> ". $daftar['deskripsi'] ." </td>";
                    $id++;
                  }
                ?>
      </tbody>
    </table>
  </div>
</body>
<footer class="text-center mt-5 mb-4">
  © <?php
    $copyYear = 2022; // Set your website start date
    $curYear = date('Y'); // Keeps the second year updated
      echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
  ?> Copyright Jundy779
</footer>

</html>