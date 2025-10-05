<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: dashboard.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === "admin" && $password === "1234") {
    $_SESSION["username"] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    $error = "Username atau password salah!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Catynesia</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: linear-gradient(135deg, #ffd6e0, #a7c7e7);
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: #fffafc;
      padding: 2rem 2.5rem;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.1);
      text-align: center;
      width: 100%;
      max-width: 360px;
      transition: transform 0.3s ease;
    }
    .login-box:hover {
      transform: translateY(-4px);
    }
    .login-box h2 {
      margin-bottom: 1rem;
      color: #444;
    }
    .login-box p {
      color: #777;
      margin-bottom: 1.5rem;
    }
    .login-box input {
      width: 100%;
      padding: 0.8rem;
      margin-bottom: 1rem;
      border: 1px solid #ddd;
      border-radius: 10px;
      outline: none;
      font-size: 1rem;
    }
    .login-box button {
      background: #b5ead7;
      border: none;
      color: #333;
      font-weight: bold;
      padding: 0.8rem;
      border-radius: 10px;
      cursor: pointer;
      width: 100%;
      transition: background 0.3s;
    }
    .login-box button:hover {
      background: #9ddbc7;
    }
    .cat-icon {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }
    .error {
      color: red;
      margin-bottom: 0.8rem;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <div class="cat-icon">🐾</div>
    <h2>Login Catynesia</h2>
    <p>Masuk ke komunitas penyayang kucing</p>
    <?php if (isset($error)): ?>
      <div class="error"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST" action="">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Masuk 🐱</button>
    </form>
  </div>
</body>
</html>
