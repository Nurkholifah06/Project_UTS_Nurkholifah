<?php
include "header.php";
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kalkulator BMI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kalkulator BMI</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body row">
                            <div class="col-6">
                                <h2>Kalkulator BMI (IMT)</h2>
                                <p>Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (IMT) dan mengecek apakah
                                    berat badan Anda ideal atau tidak. Anda juga dapat menggunakannya untuk memeriksa
                                    indeks massa tubuh anak.</p>
                                <center>
                                    <img src="data:image/jpeg;base64,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"
                                        style="width: 220px; margin-top: 10px;" alt="">
                                </center>

                            </div>
                            <div class="col-6">
                                <form method="POST" action="hasil_bmi.php">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kode Pasien</label>
                                        <input placeholder="Masukan Kode" type="text" name="kode" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input placeholder="Masukan Nama" type="text" name="nama" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Berapa tinggi Anda? (cm)</label>
                                        <input placeholder="Masukan Tinggi" type="text" name="tinggi"
                                            class="form-control" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Berapa berat badan Anda? (kg)</label>
                                        <input placeholder="Masukan Berat" type="text" name="berat" class="form-control"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis kelamin</label>
                                        <div class="radio-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="L" name="gender"
                                                    id="pria">
                                                <label class="form-check-label" for="inlineRadio1"> Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="P" name="gender"
                                                    id="wanita">
                                                <label class="form-check-label" for="inlineRadio2"> Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal Pemeriksaan</label>
                                        <input type="date" name="date" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <a href="hasil_bmi.php">
                                        <button name="proses" type="submit" class="btn btn-primary">Hitung</button>
                                    </a>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include "footer.php";
?>