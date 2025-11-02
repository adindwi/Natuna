<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrasi - Saipul</title>
  <link rel="stylesheet" href="style2.css" />
</head>
<body>
  <div class="container">
    <!-- KIRI: FORM REGISTRASI -->
    <div class="left">
      <div class="form-box">
        <h2>Daftar Akun</h2>
        <p>Selamat datang, silakan membuat akun anda terlebih dahulu</p>

        <form action="proses_regis.php" method="POST">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Masukkan username" required>

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Masukkan password" required>

          <label for="telepon">Nomor Telepon</label>
          <input type="text" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" required>

          <div class="checkbox-container">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">Setuju dengan syarat dan kebijakan</label>
          </div>

          <button type="submit" class="btn">Daftar</button>

          <div class="login-link">
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
          </div>
        </form>
      </div>
    </div>

    <!-- KANAN: GAMBAR -->
    <div class="right">
      <img src="asset/Gambar_login.png" alt="Register Image">
    </div>
  </div>
</body>
</html>
