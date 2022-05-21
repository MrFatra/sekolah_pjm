<?php

include('config.php');

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];

    $sql = "UPDATE siswa SET nama_siswa = '$nama_siswa', id_kelas = '$kelas' WHERE id_siswa = $id";
    $query = mysqli_query($connect, $sql);

    if (!$query) die;
    else header('Location: index.php?status=berhasil_edit');
}
