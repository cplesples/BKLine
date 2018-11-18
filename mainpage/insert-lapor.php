<?php
// 1. lakukan koneksi
include('../config.php');
// 2. Menampung data dari form
$nama =$_POST['nama'];
$kelas =$_POST['kelas'];
$masalah =$_POST['masalah'];
$alasan =$_POST['alasan'];
// 3. Menjalankan perintah Insert Data
$sql_insert="INSERT INTO la VALUES ('','$nama','$kelas','$masalah','$alasan')";
// 4. Menjalankan perintah
mysqli_query($koneksi,$sql_insert)or die(mysqli_error($koneksi));
echo '<script>
alert("Data Berhasil Disimpan. *note, Anda akan otomatis terlogout");
location="../logout.php"
</script>';
?>