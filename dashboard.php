<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Catynesia</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: linear-gradient(135deg, #a7c7e7, #fff5da);
      font-family: 'Poppins', sans-serif;
      color: #333;
      margin: 0;
      padding: 0;
    }
    header {
      background: #ffd6e0;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    header h1 {
      margin: 0;
    }
    main {
      text-align: center;
      margin-top: 3rem;
    }
    .welcome {
      background: #fffafc;
      padding: 2rem;
      border-radius: 16px;
      max-width: 500px;
      margin: 0 auto;
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .welcome:hover {
      transform: translateY(-4px);
    }
    a.btn {
      display: inline-block;
      background: #b5ead7;
      color: #333;
      padding: 0.7rem 1.4rem;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      margin: 1rem 0.5rem;
      transition: background 0.3s;
    }
    a.btn:hover {
      background: #9ddbc7;
    }
  </style>
</head>
<body>
  <header>
    <h1>Selamat Datang, <?= htmlspecialchars($username) ?> 🐾</h1>
  </header>
  <main>
    <div class="welcome">
      <h2>Hai <?= htmlspecialchars($username) ?>!</h2>
      <p>Terima kasih sudah bergabung dengan komunitas pecinta kucing 💕</p>
      <p>Ayo bantu lebih banyak kucing menemukan rumah baru 😺</p>
      <div>
        <a href="index.php" class="btn">🏠 Beranda</a>
        <a href="logout.php" class="btn">🚪 Logout</a>
      </div>
    </div>
  </main>
</body>
</html>
