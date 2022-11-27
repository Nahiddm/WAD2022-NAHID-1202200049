<?php

include("konneksi.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM showroom_nahid WHERE id_mobil=$id";
    $query = mysqli_query($db, $sql);

    if ($update) {
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/ListCarmobil.php'>";
        // header('Location: ../ListCarmobil.php?status=sukses');
        } else {
        echo "<script>alert('Data gagal ditambahkan')</script>";
        header('Location: ../pages/ListCarmobil.php?status=gagal');
        }
    
}
?>