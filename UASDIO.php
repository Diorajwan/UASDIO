<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1 align="center">SOAL UAS PRAKTIK RPL</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <form method="POST">
    <center>
        <img src="assalaampride-removebg-preview.png" alt="">
        <p>
        <h3>PENGGAJIHAN</h3>
        </p>
        <P>
        <h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
        </P>
    </center>
    <div class="card">
        <h5 class="card-header">Data penggajihan</h5>
        <div class="card-body">
        </div>
        <div class="row mb-3">
            <div class="md-6">
                <label for="no" class="form-label">No</label>
                <input type="number" id="no" name="no" class="form-control" placeholder="No" required>
            </div>
            <div class="md-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required>
            </div>
        </div>
        <div>
            <div>
                <label for="unit" class="form-label">Unit Pendidikan</label>
                <select name="unit" id="unit" class="form-select" required>
                    <option value="">PILIH UNIT PENDIDIKAN</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
                    <option value="SMA">SMA</option>
                    <option value="MTS">MTS</option>
                    <option value="MA">MA</option>
                </select>
            </div>
            <div>
                <label for="tanggal" class="form-label">Tanggal gaji</label>
                <input type="date" name="gaji" id="tgl" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <fieldset class="border p-3">
                    <legend>Gaji</legend>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-select">
                            <option value="">PILIH JABATAN</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakasek">Wakasek</option>
                            <option value="Guru">Guru</option>
                            <option value="Karyawan">Karyawan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lama_kerja" class="form-label">Lama kerja</label>
                        <input type="number" id="lama_kerja" name="lama_kerja" class="form-control" placeholder="Lama Kerja" required>
                    </div>
                    <div class="mb-3">
                        <label for="status_kerja" class="form-label">Status kerja</label>
                        <select name="status_kerja" id="status_kerja" class="form-select">
                            <option value="">Pilih status kerja anda</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                        </select>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <fieldset class="border p-3">
                    <legend>Potongan</legend>
                    <div class="mb-3">
                        <label for="bpjs" class="form-label">BPJS</label>
                        <input type="number" id="bpjs" name="bpjs" class="form-control" placeholder="BPJS">
                    </div>
                    <div class="mb-3">
                        <label for="pinjaman" class="form-label">Pinjaman</label>
                        <input type="pinjaman" id="pinjaman" name="pinjaman" class="form-control" placeholder="PINJAMAN">
                    </div>
                    <div class="mb-3">
                        <label for="cicilan" class="form-label">Cicilan</label>
                        <input type="cicilan" id="cicilan" name="cicilan" class="form-control" placeholder="Cicilan">
                    </div>
                    <div class="mb-3">
                        <label for="infaq" class="form-label">Infaq</label>
                        <input type="infaq" id="infaq" name="infaq" class="form-control" placeholder="Infaq">
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" name="proses" class="btn btn-primary">Proses</button>
        </div>
    </div>
    </form>
</body>

</html>
<?php
if (isset($_POST['proses'])) {
    $nomor = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $gaj = $_POST['gaji'];
    $jabatan = $_POST['jabatan'];
    $lamker = $_POST['lama_kerja'];
    $st = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjam = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

    // Jabatan dan Gaji
    if ($jabatan == "Kepala Sekolah") {
        $gaji = 10000000;
    } elseif ($jabatan == "Wakasek") {
        $gaji = 7500000;
    } elseif ($jabatan == "Guru") {
        $gaji = 5000000;
    } elseif ($jabatan == "Karyawan") {
        $gaji = 2500000;
    } else {
        $gaji = 0;
    }

    $bonus = ($st == "Tetap") ? 1000000 : 0;

    $gaji_kotor = $gaji + $bonus;
    $total_potongan = $bpjs + $pinjam + $cicilan + $infaq;
    $gaji_bersih = $gaji_kotor - $total_potongan;

    class calonDaftar
    {

        public function pendaftaran($nomor2, $nama2, $unit2, $gaj2, $jabatan2, $gaji2, $lamker2, $st2, $bonus2, $bpjs2, $pinjam2, $cicilan2, $infaq2, $gaji_bersih2)
        {

?>
            <div class="container mt-5">
                <div class="card shadow">
                    <div class="card-header text-center h2">
                        <tr>
                            <th colspan="2" class="text-center h5"><?php echo $nama2; ?></th>
                        </tr>
                    </div>
                    <br>
                    <div class="text-center text-primary">
                        <h4>STRUK GAJI</h4>
                    </div>
                    <div class="card-body">
                        <center>
                            <table>
                                <tr>
                                    <th>No</th>
                                    <td>:</td>
                                    <td><?php echo $nomor2; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td><?php echo $nama2; ?></td>
                                </tr>
                                <tr>
                                    <th>Unit Pendidikan</th>
                                    <td>:</td>
                                    <td><?php echo $unit2; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Gaji</th>
                                    <td>:</td>
                                    <td><?php echo $gaj2; ?></td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>:</td>
                                    <td><?php echo $jabatan2; ?></td>
                                </tr>
                                <tr>
                                    <th>Gaji</th>
                                    <td>:</td>
                                    <td>Rp <?php echo number_format($gaji2, 0, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <th>Lama Kerja</th>
                                    <td>:</td>
                                    <td><?php echo $lamker2; ?> Tahun</td>
                                </tr>
                                <tr>
                                    <th>Status Kerja</th>
                                    <td>:</td>
                                    <td><?php echo $st2; ?></td>
                                </tr>
                                <tr>
                                    <th>Bonus</th>
                                    <td>:</td>
                                    <td>Rp <?php echo number_format($bonus2, 0, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <th>BPJS</th>
                                    <td>:</td>
                                    <td>Rp <?php echo number_format($bpjs2, 0, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <th>Pinjaman</th>
                                    <td>:</td>
                                    <td>Rp <?php echo number_format($pinjam2, 0, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <th>Cicilan</th>
                                    <td>:</td>
                                    <td>Rp <?php echo number_format($cicilan2, 0, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <th>Infaq</th>
                                    <td>:</td>
                                    <td>Rp <?php echo number_format($infaq2, 0, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Rp -<?php echo number_format($gaji_bersih2, 0, ',', '.'); ?></td>
                                </tr>
                            </table>
                        </center>
            <?php
        }
    }
    $hasil = new calonDaftar();
    echo $hasil->pendaftaran($nomor, $nama, $unit, $gaj, $jabatan, $gaji, $lamker, $st, $bonus, $bpjs, $pinjam, $cicilan, $infaq, $gaji_bersih);
}
            ?>