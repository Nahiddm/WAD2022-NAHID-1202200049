<?php

include("konneksi.php");


$name= $_POST['nama'];
$mail = $_POST['email'];
$no = $_POST['no_hp'];
$password = $_POST['password'];


    $sql = "UPDATE user_nahid
        SET nama='$nama', emaill='$email', no_hp='$no', password='$password'
        WHERE id=$id";


$update = mysqli_query($db, $sql);
    if ($update) {
    echo "<script>alert('Data telah diupdate')</script>";
    echo "<meta http-equiv='refresh' content='1 url=../pages/ListCarmobil.php'>";

    } else {
    echo "<script>alert('Data gagal diupdate')</script>";
    header('Location: ../pages/addmobil.php?status=gagal');
    }


?>