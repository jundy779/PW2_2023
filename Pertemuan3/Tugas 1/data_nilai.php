<?php include('header.php')  ?>
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Mata Kuliah</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Rata-rata</th>
        <th>Grade</th>
        <th>Predikat</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr>
                <td>1</td>
                <td>Fakhirul</td>
                <td>Statistika dan Probabilitas</td>
                <td>89</td>
                <td>95</td>
                <td>80</td>
                <td>87.95</td>
                <td>A</td>
                <td>Sangat Memuaskan</td>
                <td>Lulus</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rul</td>
                <td>Statistika dan Probabilitas</td>
                <td>78</td>
                <td>81</td>
                <td>80</td>
                <td>79.75</td>
                <td>B</td>
                <td>Memuaskan</td>
                <td>Lulus</td>
            </tr> -->

      <?php
                /**
                * Task 3
                * 1. Import libfungsi.php
                * 2. Tampilkan data dalam bentuk table
                * 3. Berikan error handling untuk mengatasi ketika form belum disubmit
                * Note: Sesuaikan dengan isi table yang sudah ada						
                */
                require('libfungsi.php');
                if (isset($_POST['submit'])) {
                    $no = 1;
                    $nama = $_POST['nama'];
                    $matkul = $_POST['matkul'];
                    $n_uts = $_POST['n_uts'];
                    $n_uas = $_POST['n_uas'];
                    $n_tugas = $_POST['n_tugas'];
                    $n_rata = ($n_uts + $n_uas + $n_tugas) / 3;

                    echo "<tr>";
                    echo "<td>1</td>";
                    echo "<td>$nama</td>";
                    echo "<td>$matkul</td>";
                    echo "<td>$n_uts</td>";
                    echo "<td>$n_uas</td>";
                    echo "<td>$n_tugas</td>";
                    echo '<td>'. number_format($n_rata,2,","). '</td>';
                    echo grade($n_rata);
                    echo predikat($n_rata);
                    echo kelulusan($n_rata);
                    echo "</tr>";

                  
                } else {
                  echo "
                  <div class='alert alert-danger m-3' role='alert'>
                      Data Belum di Masukkan, Silahkan Masukkan dulu melalui FORM DAFTAR <a href='form_nilai.php'>disini.</a>
                  </div>
                  ";
                }
        
                


            ?>
    </tbody>
  </table>
</div>
<?php include('footer.php') ?>