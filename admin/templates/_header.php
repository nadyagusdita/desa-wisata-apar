<?php
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header('location: ../../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Paket Wisata</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
    <script type="text/javascript" src="../assets/vendors/ckeditor/ckeditor.js"></script>
    <link rel="shortcut icon" href="../../assets/img/pariaman.png" type="image/x-icon">
</head>

<body>