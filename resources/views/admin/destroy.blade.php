<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: loginadmin.php");
    exit;
}

$table = $_GET['table'] ?? null;
$id    = $_GET['id'] ?? null;

// Validasi data dasar
if (!$table || !$id) {
    die("Parameter tidak lengkap.");
}

// Validasi tabel
$allowed_tables = ['films', 'tv_series', 'movies', 'anime_metadata', 'people', 'people_details'];
if (!in_array($table, $allowed_tables)) {
    die("Tabel tidak valid.");
}

// Ambil primary key
$pk_res = mysqli_query($conn, "SHOW KEYS FROM `$table` WHERE Key_name = 'PRIMARY'");
$pk = mysqli_fetch_assoc($pk_res);
if (!$pk) {
    die("Primary key tidak ditemukan.");
}
$primary_key = $pk['Column_name'];

// Tentukan tipe bind_param (int atau string)
$type = is_numeric($id) ? "i" : "s";

// Query hapus
$stmt = $conn->prepare("DELETE FROM `$table` WHERE `$primary_key` = ?");
$stmt->bind_param($type, $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("Location: admin.php?table=" . urlencode($table));
    exit;
} else {
    echo "Gagal menghapus data atau ID tidak ditemukan.";
}

$stmt->close();
$conn->close();
