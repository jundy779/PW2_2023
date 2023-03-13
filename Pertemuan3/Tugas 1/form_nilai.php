<!-- /**
* Task 2
* 1. Rapihkan form ini
* 2. Gunakan method POST
*/ -->
<?php include('header.php')  ?>

<div class="container my-5">
    <h1 class="text-center mb-4">Form Nilai</h1>
    <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="post" action="data_nilai.php">
        <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama_lengkap" type="text" class="form-control" name="nama" placeholder="Siapa nama kamu?"
                        required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" required="required" class="form-select">
                        <option value="">----- Pilih Mata Kuliah -----</option>
                        <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="nilai_uts" type="number" min="0" max="100" name="n_uts" class="form-control"
                        placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="nilai_uas" type="number" min="0" max="100" name="n_uas" class="form-control"
                        placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Praktikum</label>
                <div class="col-8">
                    <input id="nilai_tugas" type="number" min="0" max="100" name="n_tugas" class="form-control"
                        placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="offset-4 col-8">
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
</div>

<?php include('footer.php') ?>