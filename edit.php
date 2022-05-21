<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>

<style>
    @import url(https://fonts.googleapis.com/css?family=Lily+Script+One);

    body {
        margin: 0;
        font-family: arial, tahoma, sans-serif;
        font-size: 12px;
        font-weight: normal;
        direction: ltr;
        background: white;
    }

    form {
        margin: 10% auto 0 auto;
        padding: 30px;
        width: 400px;
        height: auto;
        overflow: hidden;
        background: white;
        border-radius: 10px;
    }

    form label {
        font-size: 14px;
        color: darkgray;
        cursor: pointer;
    }

    form label,
    form input {
        float: left;
        clear: both;
    }

    form input,
    form select {
        margin: 15px 0;
        padding: 15px 5px 15px 5px;
        width: 100%;
        outline: none;
        border: 1px solid #bbb;
        border-radius: 10px;
        display: inline-block;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -ms-transition: 0.2s ease all;
        -o-transition: 0.2s ease all;
        transition: 0.2s ease all;
    }

    form input[type=text]:focus {
        border-color: cornflowerblue;
    }

    form input[type=text] {
        padding-left: 15px;
    }

    form input[type=submit] {
        background-color: rgba(120, 120, 120, 0.9);
        color: rgba(255, 255, 255, 0.6);
    }

    form input[type=submit]:hover,
    form input[type=submit]:active {
        background-color: cornflowerblue;
        color: white;
    }

    #logo {
        margin: 0 auto;
        width: 200px;
        font-family: 'Lily Script One', cursive;
        font-size: 60px;
        font-weight: bold;
        text-align: center;
        color: cornflowerblue;
        -webkit-transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -ms-transition: 0.2s ease all;
        -o-transition: 0.2s ease all;
        transition: 0.2s ease all;
    }
</style>

<?php

include('config.php');

$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id_siswa = $id";
$query = mysqli_query($connect, $sql);

$siswa = mysqli_fetch_array($query);

?>

<body>
    <form method="POST" action="proses_edit.php?id=<?= $id ?>">

        <h3 id="logo">Tambah Data</h3>

        <label for="nama_siswa">Nama Siswa</label>
        <input type="text" id="nama_siswa" name="nama_siswa" autocomplete="off" value="<?= $siswa['nama_siswa'] ?>" required />

        <label for="kelas">Kelas</label>
        <?php
        include_once('config.php');

        $sql = "SELECT * FROM kelas";
        $query = mysqli_query($connect, $sql);
        ?>
        <select name="kelas" id="kelas">
            <?php
            while ($data = mysqli_fetch_array($query)) :
            ?>
                <option value="<?= $data['id_kelas'] ?>" <?php if ($data['id_kelas'] == $siswa['id_kelas']) {
                                                                print "SELECTED";
                                                            } ?>>
                    <?= $data['nama_kelas'] ?>
                </option>
            <?php endwhile; ?>
        </select>

        <input type="submit" name="edit" value="Tambah" />

    </form>
</body>

</html>