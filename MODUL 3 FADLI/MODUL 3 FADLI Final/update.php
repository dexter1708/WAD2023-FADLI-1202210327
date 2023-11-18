<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$conn = mysqli_connect("localhost", "root", "", "modul3_wad");

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM showroom_mobil where id = '$id'");

// Tangkap nilai input dari formulir POST
$nama_mobil = $_POST['nama_mobil'];
$brand_mobil = $_POST['brand_mobil'];
$warna_mobil = $_POST['warna_mobil'];
$tipe_mobil = $_POST['tipe_mobil'];
$harga_mobil = $_POST['harga_mobil'];

// (3) Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
$update = "UPDATE showroom_mobil SET 
            nama_mobil='$nama_mobil', 
            brand_mobil='$brand_mobil', 
            warna_mobil='$warna_mobil', 
            tipe_mobil='$tipe_mobil', 
            harga_mobil='$harga_mobil' 
            WHERE id=$id";

// Eksekusi perintah SQL UPDATE
$result = mysqli_query($conn, $update);

// Buatkan kondisi jika eksekusi query berhasil
if ($result) {
    echo "<script>
            alert('Data mobil berhasil diubah.');
            window.location.href = 'list_mobil.php';
          </script>";
} else {
    echo "<script>
            alert('Data mobil gagal diubah.');
            window.location.href = 'list_mobil.php';
          </script>";
}

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
?>
