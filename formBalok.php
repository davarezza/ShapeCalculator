<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Form Balok</title>
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
            <h1 class="mb-3 fs-4">Aplikasi Menghitung Bangun Ruang Balok</h1>
            <hr class="border border-danger border-2 opacity-25">
            <h3 class="mb-3 fs-4">Volume Balok</h3>
            <div class="mb-3">
                <label for="panjangvolume" class="form-label">Panjang</label>
                <input type="number" class="form-control" id="panjangvolume" name="panjangvolume" placeholder="Masukkan Angka..." required>
            </div>
            <div class="mb-3">
                <label for="lebarvolume" class="form-label">Lebar</label>
                <input type="number" class="form-control" id="lebarvolume" name="lebarvolume" placeholder="Masukkan Angka..." required>
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
                <p>panjang * lebar * tinggi</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <?php
            if (isset($_POST['panjangvolume']) && isset($_POST['lebarvolume']) && isset($_POST['tinggivolume'])) {
                $panjangvolume = $_POST['panjangvolume'];
                $lebarvolume = $_POST['lebarvolume'];
                $tinggivolume = $_POST['tinggivolume'];
                $hasil = $panjangvolume * $lebarvolume * $tinggivolume;
                echo "<div class='mt-3 fs-5'>Hasilnya adalah $hasil</div>";
            }
        ?>
    </div>
<div class="container mb-4">
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
            <h1 class="mb-3 fs-4">Aplikasi Menghitung Bangun Ruang Balok</h1>
            <hr class="border border-danger border-2 opacity-25">
            <h3 class="mb-3 fs-4">Luas Permukaan Balok</h3>
            <div class="mb-3">
                <input class="form-control" type="number" value="2" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="panjangpermukaan" class="form-label">Panjang</label>
                <input type="number" class="form-control" id="panjangpermukaan" name="panjangpermukaan" placeholder="Masukkan Angka..." required>
            </div>
            <div class="mb-3">
                <label for="lebarpermukaan" class="form-label">Lebar</label>
                <input type="number" class="form-control" id="lebarpermukaan" name="lebarpermukaan" placeholder="Masukkan Angka..." required>
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
                <p>2 * ((p*l) + (p*t) + (l*t))</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <?php
            if (isset($_POST['panjangpermukaan']) && isset($_POST['lebarpermukaan']) && isset($_POST['tinggipermukaan'])) {
                $panjangpermukaan = $_POST['panjangpermukaan'];
                $lebarpermukaan = $_POST['lebarpermukaan'];
                $tinggipermukaan = $_POST['tinggipermukaan'];
                $hasil = 2 * (( $panjangpermukaan * $lebarpermukaan ) + ( $panjangpermukaan *$tinggipermukaan ) + ( $lebarpermukaan * $tinggipermukaan ));
                echo "<div class='mt-3 fs-5'>Hasilnya adalah $hasil</div>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
