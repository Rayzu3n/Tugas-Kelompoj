<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

$_host = "localhost";
$_user = "root";
$_pass = "";
$_db = "DB_Kelompok";

try {
  $conn = new PDO("mysql:host=$_host;dbname=$_db", $_user, $_pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Koneksi gagal: " . $e->getMessage());
}

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO User (username, password, email) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->execute([$username, $hashed_pass, $email]);

  echo "<script>alert('Registrasi Berhasil'); window.location='index.php';</script>";
  exit;
}

if (isset($_POST["login"])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM User WHERE username = ?";
  $stmt = $conn->prepare($query);
  $stmt->execute([$username]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row) {
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $username;
      echo "<script>alert('Login Berhasil'); window.location='dashboard.php';</script>";
    } else {
      echo "<script>alert('Password salah!'); window.location='index.php';</script>";
    }
  } else {
    echo "<script>alert('Username tidak ditemukan!'); window.location='index.php';</script>";
    exit;
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}