<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'db_aplikasitelepon');

// Ambil nilai id_material dari request
$id_material = $_GET['id_material'];

// Query untuk mengambil data harga_satuan dari tabel material
$query = "SELECT harga_satuan FROM data_material WHERE id = '$id_material'";

// Eksekusi query
$result = mysqli_query($conn, $query);

// Ambil nilai harga_satuan dari hasil query
$harga_satuan = mysqli_fetch_assoc($result)['harga_satuan'];

// Return nilai harga_satuan sebagai response
echo $harga_satuan;
?>
