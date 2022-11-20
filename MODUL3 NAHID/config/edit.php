<?php

include("konneksi.php");

$id = $_POST['id'];
$carr = $_POST['mobil'];
$ownr = $_POST['pemilik'];
$merk = $_POST['merk'];
$date = $_POST['date'];
$desc = $_POST['deskripsi'];
$paym = $_POST['pembayaran'];


$fileName = $_FILES['foto']['name'];
$tmpName = $_FILES['foto']['tmp_name'];
$dirTarget = "../assets/images/";
$upload = move_uploaded_file($tmpName, $dirTarget.$fileName);

if($upload) {
    $sql = "UPDATE showroom_nahid
        SET nama_mobil='$carr', pemilik_mobil='$ownr', merk_mobil='$merk', tanggal_beli='$date', deskripsi='$desc', foto_mobil='$fileName', status_pembayaran='$paym' 
        WHERE id_mobil=$id";
} else {
    $sql = "UPDATE showroom_nahid
        SET nama_mobil='$carr', pemilik_mobil='$ownr', merk_mobil='$merk', tanggal_beli='$date', deskripsi='$desc', status_pembayaran='$paym' 
        WHERE id_mobil=$id";
}

$update = mysqli_query($db, $sql);

if($update) {
    session_start();
    $_SESSION['msg'] = 'success';
    redirect('../pages/ListCarmobil.php');
} else {
    session_start();
    $_SESSION['msg'] = 'failed';
    return redirect('../pages/ListCarmobil.php');
}
?>