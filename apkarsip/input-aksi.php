<?php
session_start();
//cek button    
    if ($_POST['submit'] == 'submit') {
    $tanggalasrip= $_POST['tanggalasrip'];
    $nomorkotak= $_POST['nomorkotak'];
    $nik= $_POST['nik'];
    $nama= $_POST['nama'];
    $ttl= $_POST['ttl'];
    $alamat= $_POST['alamat'];


    //Masukan data ke Table
    $input    ="INSERT INTO arsipwni (tanggalasrip,nomorkotak,nik ,nama, ttl, alamat) VALUES ('$tanggalasrip','$nomorkotak','$nik','$nama','$ttl','$alamat')";
    $query_input =mysql_query($input);
    if ($query_input) {
    
//Tutup koneksi engine MySQL
    mysql_close($Open);
    }
}
?>