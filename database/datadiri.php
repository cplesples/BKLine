<?php 
    include "koneksi.php";
	$qry = mysqli_query($koneksi,"SELECT * FROM data-diri");
	$data = mysqli_fetch_array($qry);
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login BKLine</title>
    <link rel="stylesheet" href="../../../../SEKOLAH/BKLine/css/style.css" type="text/css">
</head>
<body>
    <div class="log">
            <section class="data-diri" id="input-form">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-center" style="margin-top:20px">Data Diri Anda</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input type="numeric" name="nis" class="form-control" placeholder="Masukkan NIS Anda">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Sekolah</label>
                                    <input type="email" name="emailnis" class="form-control" placeholder="Masukkan email sekolah Anda">
                                </div>
                                <input class="btn btn-danger" type="submit" value="Submit" name="simpan">
                            </form>
                            <?php 
                                if (isset($_POST['simpan'])) {
                                    $nama = $_POST['nama'];
                                    $nis = $_POST['nis'];
                                    $emailnis = $_POST['emailnis'];
                                    $login = mysqli_query($koneksi, "INSERT INTO bkline(nama, nis, emailnis)VALUES('$nama', '$nis', '$emailnis')");
                                    if ($login) {
                                        ?>
                                        <script type="text/javascript">
                                            alert('Login Berhasil');
                                            document.location.href="../../../../SEKOLAH/BKLine/mainpage/decision.html";
                                        </script>
                                        <?php
                                    }
                                    else {
                                        echo "gagal";
                                    }

                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</body>
</html>