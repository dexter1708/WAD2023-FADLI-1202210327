<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$conn = mysqli_connect("localhost", "root", "", "modul3_wad");

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];

// (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
$query = "DELETE FROM showroom_mobil WHERE id = '$id'";

// (4) Eksekusi query DELETE
if (mysqli_query($conn, $query)) {
    echo "Data Berhasil Dihapus.";

    header("location: home.php");
    exit(); 
} else {
    echo "Delete Error: " . mysqli_error($conn);
}

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
?>
