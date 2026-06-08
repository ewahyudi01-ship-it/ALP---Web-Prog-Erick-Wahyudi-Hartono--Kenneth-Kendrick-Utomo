<?php
session_start();
// Mengaktifkan pelaporan error agar jika ada salah ketik, PHP memunculkan baris errornya alih-alih Error 500
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 1. Panggil koneksi database
include 'connect.php';

$usernameOrGmail = $_POST['loginNameOrEmail'];
$password = $_POST['loginPass'];

$sql = "SELECT * FROM users WHERE name ='$usernameOrGmail' OR email ='$usernameOrGmail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password_user'])) {

        $_SESSION['username'] = $user['name'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['email'] = $user['email'];


        echo "<script> alert('Succesfully login! welcome to Wallpeak!');
             window.location.href = 'index.php';
                </script>";
        exit();

    } else {
        echo "<script> alert('Login failed, Please check your internet connection!')
                window.location.href = 'login.php'
                </script>";
    }
}

$conn->close();
?>
