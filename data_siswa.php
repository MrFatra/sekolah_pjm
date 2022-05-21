<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <?php

    include('header.php');

    ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div> <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.content-header -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Data Siswa Sekolah PJM</h1>
                            </div>
                            <div class="card-body">
                                <!-- Isi Content -->
                                <a href="tambah_siswa.php" class="btn btn-primary mb-3">[+] Tambah Data</a>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">Nama Siswa</th>
                                            <th class="text-center">Kelas</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        require('config.php');

                                        $i = 1;
                                        $sql = "SELECT siswa.*, kelas.nama_kelas FROM siswa LEFT JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
                                        $query = mysqli_query($connect, $sql);

                                        while ($data = mysqli_fetch_array($query)) :
                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $i++; ?></td>
                                                <td><?= $data['nama_siswa']; ?></td>
                                                <td><?= $data['nama_kelas']; ?></td>
                                                <td class="text-center">
                                                    <a href="edit.php?id=<?= $data['id_siswa'] ?>">Edit</a> |
                                                    <a href="hapus.php?id=<?= $data['id_siswa'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

    <?php

    include('footer.php');

    ?>
</body>

</html>