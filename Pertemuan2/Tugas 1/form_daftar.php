<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>

<head>
    <title>Form Pendaftaran</title>
    <!-- Load Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="m-5">Form Pendaftaran</h1>
        <form action="hasil_daftar.php" method="post" class="m-5">
            <div class="row">
                <div class="col-md-2">
                    <label for="nama_lengkap"><strong>Nama Lengkap</strong></label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nama" id="nama_lengkap">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="email"><strong>Email</strong></label>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="alamat"><strong>Alamat</strong></label>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control" col="4" name="alamat" id="alamat"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="telepon"><strong>Telepon</strong></label>
                </div>
                <div class="col-md-6">
                    <input type="tel" name="telepon" class="form-control" id="telepon">
                </div>
            </div>



            <button type="submit" name="submit" class="btn btn-primary mt-5">Submit</button>
        </form>
    </div>
</body>

</html>