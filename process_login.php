<?php
// Proses login dan set session setelah berhasil login
session_start();

// Proses verifikasi kredensial dan login
if(//kondisi verifikasi kredensial) {
    $_SESSION['username'] = $username; // $username adalah username yang berhasil login
    header('Location: welcome.php'); // Redirect ke halaman selamat datang atau halaman lainnya
} else {
    // Kredensial tidak valid, tampilkan pesan kesalahan atau arahkan kembali ke halaman login
    echo "Username atau password salah. Silakan coba lagi.";
}
?>
<?php
// Periksa apakah pengguna telah login
session_start();

if(isset($_SESSION['username'])) {
    // Pengguna telah login, lanjutkan dengan tindakan yang sesuai
} else {
    // Pengguna belum login, mungkin arahkan kembali ke halaman login atau tampilkan pesan bahwa mereka perlu login terlebih dahulu
    header('Location: login.html'); // Redirect ke halaman login jika pengguna belum login
    exit; // Pastikan untuk menghentikan eksekusi skrip setelah mengalihkan pengguna
}
?>
