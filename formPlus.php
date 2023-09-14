<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Form Plus</title>
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
            <h1 class="mb-3 fs-4">Aplikasi Penjumlahan Menggunakan PHP</h1>
            <div class="mb-3">
                <label for="angka1" class="form-label">Angka 1</label>
                <input type="number" class="form-control" id="angka1" name="angka1" placeholder="Masukkan Angka..." required>
            </div>
            <div class="mb-3">
                <label for="angka2" class="form-label">Angka 2</label>
                <input type="number" class="form-control" id="angka2" name="angka2" placeholder="Masukkan Angka..." required>
            </div>
            <button type="submit" class="btn btn-primary">Jumlahkan</button>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rumusModal">Rumus</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        <div class="modal fade" id="rumusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rumus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Bilangan 1 + Bilangan 2</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <?php
            if (isset($_POST['angka1']) && isset($_POST['angka2'])) {
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $hasil = $angka1 + $angka2;
                echo "<div class='mt-3 fs-5'>Hasilnya adalah $hasil</div>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
