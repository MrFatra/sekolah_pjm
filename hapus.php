<?php

include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM siswa WHERE id_siswa = $id";
    $query = mysqli_query($connect, $sql);

    if (!$query) die("Gagal Hapus Data");
    else header('Location: index.php?status=berhasil_hapus');
}
