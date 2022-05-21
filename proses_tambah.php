<?php

include('config.php');

if (isset($_POST['tambah'])) {
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];

    $sql = "INSERT INTO siswa(id_siswa, nama_siswa, id_kelas) VALUES(NULL, '$nama_siswa', $kelas)";
    $query = mysqli_query($connect, $sql);

    if (!$query) die;
    else header('Location: index.php?status=sukses_tambah');
}
