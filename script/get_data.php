<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'db_aplikasitelepon');

// Cek koneksi ke database
if (mysqli_connect_errno()) {
  echo "Koneksi ke database gagal: " . mysqli_connect_error();
  exit();
}

// Sanitasi input id_material
$id_material = mysqli_real_escape_string($conn, $_GET['id_material']);

// Validasi input id_material
if (!is_numeric($id_material)) {
  $response = array('harga_satuan' => 0, 'vendor' => []);
  echo json_encode($response);
  exit();
}

// Query untuk mengambil data harga_satuan dan vendor dari tabel data_material berdasarkan id_material
$query = "SELECT harga_satuan, vendor FROM data_material WHERE id = $id_material";
$result = mysqli_query($conn, $query);

// Pengecekan error saat eksekusi query
if (!$result) {
  $response = array('harga_satuan' => 0, 'vendor' => []);
  echo json_encode($response);
  exit();
}

// Jika query berhasil dieksekusi dan menghasilkan hasil (jumlah baris > 0)
if (mysqli_num_rows($result) > 0) {
  // Ambil data harga_satuan dan vendor, simpan dalam array, dan kembalikan sebagai response
  $data = mysqli_fetch_assoc($result);
  $vendor_array = explode(',', $data['vendor']); // Pisahkan opsi vendor menjadi array
  $response = array('harga_satuan' => $data['harga_satuan'], 'vendor' => $vendor_array);
  echo json_encode($response);
} else {
  // Jika query tidak menghasilkan hasil (jumlah baris = 0), kembalikan response kosong
  $response = array('harga_satuan' => 0, 'vendor' => []);
  echo json_encode($response);
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
