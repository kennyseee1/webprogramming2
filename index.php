<?php

include('koneksi.php');
?>
<!DOCTYPE html>
<html>

<head>
    <body background="kenny.jpg">
    <title>Web Programming 17090049</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">WEB PROGRAMMING 2 [17090049]</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah.php">Tambah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top:20px">
        <h2>Daftar Mahasiswa T3C</h2>

        <hr>
        <button class="btn btn-success" onclick="window.location.href='Tambah.php'"> Creat New </button>
        <br>
        <br>
        <table class="table table-striped table-hover table-sm table-bordered" style="text-align: center;">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id ASC") or die(mysqli_error($koneksi));
                if(mysqli_num_rows($sql) > 0){
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)){
                        echo '
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$data['nama'].'</td>
                            <td>'.$data['username'].'</td>
                            <td>'.$data['password'].'</td>
                            <td>'.$data['email'].'</td>
                            
                            <td>
                                <a href="edit.php?id='.$data['id'].'" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?id='.$data['id'].'" class="btn btn-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
                            </td>
                        </tr>
                        ';
                        $no++;
                    }
                }else{
                    echo '
                    <tr>
                        <td colspan="8" style="text-align: center"><b>Tidak ada data.</b></td>
                    </tr>
                    ';
                }
                ?>
            <tbody>
        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>