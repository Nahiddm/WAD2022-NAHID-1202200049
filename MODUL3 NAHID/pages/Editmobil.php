<?php
include('../config/konneksi.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM showroom_nahid WHERE id_mobil=$id";
    $query = mysqli_query($db, $sql);
    $item = mysqli_fetch_assoc($query);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/pages/ListCarmobil.php">Mycar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container py-5">
            <h1><?=$item['merk_mobil'].' '.$item['nama_mobil']?></h1>
            <p>Detail mobil <?=$item['merk_mobil'].' '.$item['nama_mobil']?></p>
            <div class="row">
                <div class="col-lg-6">
                    <img src="/assets/images/<?=$item['foto_mobil']?>" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <form method="post" action="../config/edit.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$item['id_mobil']?>">
                        <label for="mobil" class="fw-bold">Nama Mobil</label>
                        <input type="text" id="mobil" class="form-control mb-3" name="mobil" value="<?=$item['nama_mobil']?>">
                        <label for="pemilik" class="fw-bold">Nama Pemilik</label>
                        <input type="text" id="pemilik" class="form-control mb-3" name="pemilik" value="<?=$item['pemilik_mobil']?>">
                        <label for="merk" class="fw-bold">Merk</label>
                        <input type="text" id="merk" class="form-control mb-3" name="merk" value="<?=$item['merk_mobil']?>">
                        <label for="date" class="fw-bold">Tanggal Beli</label>
                        <input type="date" id="date" class="form-control mb-3" name="date" value="<?=$item['tanggal_beli']?>">
                        <label for="deskripsi" class="fw-bold">Deskripsi</label>
                        <textarea id="deskripsi" class="form-control mb-3" name="deskripsi"><?=$item['deskripsi']?></textarea>
                        <label for="foto" class="fw-bold">Foto</label>
                        <input type="file" id="foto" class="form-control mb-3" name="foto" value="<?=$item['foto_mobil']?>">
                        <div class="mb-3">
                            <div class="fw-bold">Status Pembayaran</div>
                            <input type="radio" id="lunas" class="form-check-input me-2" name="pembayaran" value="Lunas"
                            <?php if($item['status_pembayaran']=='Lunas'){echo'checked';}?>>
                            <label for="lunas" class="font-weight-bold">Lunas</label>
                            <input type="radio" id="belum" class="form-check-input ms-3 me-2" name="pembayaran" value="Belum Lunas"
                            <?php if($item['status_pembayaran']=='Belum Lunas'){echo'checked';}?>>
                            <label for="belum" class="font-weight-bold">Belum Lunas</label>
                        </div>
                        <button type="submit" class="btn btn-primary px-5">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>