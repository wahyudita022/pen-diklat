<?php  

//include koneksi database
include('koneksi.php');

//get data dari form
$nama                     = $_POST['nama'];
$nip                      = $_POST['nip'];
$tanggal_lahir            = $_POST['tanggal_lahir'];
$alamat                   = $_POST['alamat'];
$tempat_tanggal_diklat    = $_POST['tempat_tanggal_diklat'];
$jenis_diklat             = $_POST['jenis_diklat'];
$golongan                 = $_POST['golongan'];

//query insert data ke dalam database
$query = "INSERT INTO sekolah (nama, nip, tanggal_lahir,  alamat, tempat_tanggal_diklat, jenis_diklat,golongan) VALUES ('$nama', '$nip', '$tanggal_lahir', '$alamat', '$tempat_tanggal_diklat', '$jenis_diklat', '$golongan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>