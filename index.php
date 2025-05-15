<?php
require_once 'models/Dashboard.php';

$buku = Dashboard::totalBuku();
$member = Dashboard::totalMember();
$transaksi = Dashboard::totalTransaksi();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Perpustakaan</title>
  <style>
    body { font-family: Arial; margin: 30px; }
    .card {
      display: inline-block;
      padding: 20px;
      margin: 10px;
      background: #f7f7f7;
      border-radius: 10px;
      width: 200px;
      text-align: center;
      box-shadow: 2px 2px 10px #ccc;
    }
    .count { font-size: 32px; font-weight: bold; color: #333; }
    a { text-decoration: none; color: #007bff; display: block; margin-top: 10px; }
  </style>
</head>
<body>
  <h1>📊 Dashboard Perpustakaan</h1>

  <div class="card">
    <div class="count"><?= $buku ?></div>
    <div>Total Buku</div>
    <a href="views/buku/list.php">Lihat Detail</a>
  </div>

  <div class="card">
    <div class="count"><?= $member ?></div>
    <div>Total Member</div>
    <a href="views/member/list.php">Lihat Detail</a>
  </div>

  <div class="card">
    <div class="count"><?= $transaksi ?></div>
    <div>Total Transaksi</div>
    <a href="views/transaksi/list.php">Lihat Detail</a>
  </div>

</body>
</html>
