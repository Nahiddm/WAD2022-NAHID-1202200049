<?php
include('../config/konneksi.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user_nahid WHERE id=$id";
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
        
                <div class="col-lg-6">
                    <form method="post" action="../config/editprofile.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$item['id']?>">
                        <label for="nama" class="fw-bold">Nama</label>
                        <input type="text" id="nama" class="form-control mb-3" name="nama" value="<?=$item['nama']?>">
                        <label for="email" class="fw-bold">Email</label>
                        <input type="text" id="nama" class="form-control mb-3" name="nama" value="<?=$item['nama']?>">
                        <label for="no_hp" class="fw-bold">No Handphone</label>
                        <input type="number" id="no_hp" class="form-control mb-3" name="no_hp" value="<?=$item['no_hp']?>">
                        <label for="password" class="fw-bold">Password</label>
                        <input type="password" id="password" class="form-control mb-3" name="password" value="<?=$item['password']?>">
                        
                        <button type="submit" class="btn btn-primary px-5">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>