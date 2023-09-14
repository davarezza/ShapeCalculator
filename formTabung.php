<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Form Tabung</title>
    <style>
        .container {
            width: 600px;
            padding: 20px;
            margin-top: 25px;
            border: 1px solid #ccc;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #fff;
        }
        h1, button {
            text-align: center;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container">
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
            <h1 class="mb-3 fs-4">Aplikasi Menghitung Bangun Ruang Tabung</h1>
            <hr class="border border-danger border-2 opacity-25">
            <h3 class="mb-3 fs-4">Volume Tabung</h3>
            <div class="mb-3">
                <label for="6" class="form-label">Phi</label>
                <input class="form-control" type="text" value="3,14" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="jarivolume" class="form-label">Jari-Jari</label>
                <input type="number" class="form-control" id="jarivolume" name="jarivolume" placeholder="Masukkan Angka..." required>
            </div>
            <div class="mb-3">
                <label for="tinggivolume" class="form-label">Tinggi</label>
                <input type="number" class="form-control" id="tinggivolume" name="tinggivolume" placeholder="Masukkan Angka..." required>
            </div>
            <button type="submit" class="btn btn-primary">Jumlahkan</button>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rumusModal">Rumus</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        <div class="modal fade" id="rumusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rumus Volume</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p> π x r² x t</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <?php
            if (isset($_POST['jarivolume']) && isset($_POST['tinggivolume'])) {
                $jarivolume = $_POST['jarivolume'];
                $tinggivolume = $_POST['tinggivolume'];
                $hasil = 3.14 * ($jarivolume * $jarivolume) * $tinggivolume;
                echo "<div class='mt-3 fs-5'>Hasilnya adalah $hasil</div>";
            }
        ?>
    </div>
<div class="container mb-4">
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
            <h1 class="mb-3 fs-4">Aplikasi Menghitung Bangun Ruang Tabung</h1>
            <hr class="border border-danger border-2 opacity-25">
            <h3 class="mb-3 fs-4">Luas Permukaan Tabung</h3>
            <div class="mb-3">
                <input class="form-control" type="number" value="2" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="6" class="form-label">Phi</label>
                <input class="form-control" type="text" value="3,14" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="jaripermukaan" class="form-label">Jari-Jari</label>
                <input type="number" class="form-control" id="jaripermukaan" name="jaripermukaan" placeholder="Masukkan Angka..." required>
            </div>
            <div class="mb-3">
                <label for="tinggipermukaan" class="form-label">Tinggi</label>
                <input type="number" class="form-control" id="tinggipermukaan" name="tinggipermukaan" placeholder="Masukkan Angka..." required>
            </div>
            <button type="submit" class="btn btn-primary">Jumlahkan</button>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rumusLuasPermukaan">Rumus</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        <div class="modal fade" id="rumusLuasPermukaan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rumus Luas Permukaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>2 π r (r + t)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <?php
            if (isset($_POST['jaripermukaan']) && isset($_POST['tinggipermukaan'])) {
                $jaripermukaan = $_POST['jaripermukaan'];
                $tinggipermukaan = $_POST['tinggipermukaan'];
                $hasil = 2 * 3.14 * $jaripermukaan * ($jaripermukaan + $tinggipermukaan);
                echo "<div class='mt-3 fs-5'>Hasilnya adalah $hasil</div>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
