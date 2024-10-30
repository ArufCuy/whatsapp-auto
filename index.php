<?php
// Mendapatkan data dari POST request yang dikirim WhatsAuto
$app_name   = $_POST["app"];         // Nama aplikasi pengirim (misalnya WhatsApp, Messenger)
$sender     = $_POST["sender"];      // Nama atau nomor pengirim pesan
$message    = $_POST["message"];     // Isi pesan yang diterima
$phone      = $_POST["phone"];       // Nomor pengirim (opsional, jika tersedia)
$group_name = $_POST["group_name"];  // Nama grup (jika pesan dari grup, opsional)

// Proses pesan masuk sesuai dengan logika yang diinginkan (di sini kita hanya mengirim balasan sederhana)
$response = array("reply" => "Hello $sender, we received your message: $message.");

// Mengirim balasan sebagai JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
