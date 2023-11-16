<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POSt
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        echo"menggunakan metode post";
    
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
        $nama_mobil= $_POST['nama_mobil'];
    // b. Ambil data brand mobil
        $nama_brand= $_POST['nama_brand'];
    // c. Ambil data warna mobil
        $warna_mobil= $_POST['warna_mobil'];
    // d. Ambil data tipe mobil
        $tipe_mobil= $_POST['tipe_mobil'];
    // e. Ambil data harga mobil
        $harga_mobil= $_POST['harga_mobil'];
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
        $query= mysqli_query($Connect,"INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES ('$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', '$harga_mobil') ");

    // (5) Buatkan kondisi jika eksekusi query berhasil
        if($query){
            echo"Data berhasil ditambahkan.";
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
        }else{
            echo"Error: {mysqli_query($query)}";
        }

    }else{ echo"tidak menggunakan post";}

    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 

// (7) Tutup koneksi ke database setelah selesai menggunakan database
    mysqli_close($Connect);
?>