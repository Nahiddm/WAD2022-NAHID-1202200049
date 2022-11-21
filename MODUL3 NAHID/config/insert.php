<?php

if(include("konneksi.php")) {
    $fileName = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    $dirTarget = "../assets/images/";
    $upload = move_uploaded_file($tmpName, $dirTarget.$fileName);

    if($upload) {
        $carr = $_POST['mobil'];
        $ownr = $_POST['pemilik'];
        $merk = $_POST['merk'];
        $date = $_POST['date'];
        $desc = $_POST['deskripsi'];
        $imgs = $fileName;
        $paym = $_POST['pembayaran'];

        $query = "INSERT INTO showroom_nahid (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
                    VALUE ('$carr', '$ownr', '$merk', '$date', '$desc', '$imgs', '$paym')";
        $insert =mysqli_query ($db,$query);

        if ($query) {
            echo "<script>alert('Data telah ditambahkan')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../pages/ListCarmobil.php'>";
            // header('Location: ../ListCarmobil.php?status=sukses');
        } else {
            echo "<script>alert('Data gagal ditambahkan')</script>";
            header('Location: ../pages/addmobil.php?status=gagal');
        }
    }
} else {
    die("masih salah");
}

?>