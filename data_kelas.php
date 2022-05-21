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
                                <h1>Data Kelas Sekolah PJM</h1>
                            </div>
                            <div class="card-body">
                                <!-- Isi Content -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID Kelas</th>
                                            <th class="text-center">Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        require('config.php');

                                        $sql = "SELECT * FROM kelas";
                                        $query = mysqli_query($connect, $sql);

                                        while ($data = mysqli_fetch_array($query)) :
                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $data['id_kelas']; ?></td>
                                                <td class="text-center"><?= $data['nama_kelas']; ?></td>
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