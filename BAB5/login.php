<?php
session_start(); // Mulai session

//cek apakah ada sesi
if (isset($_SESSION["username"])) {
  header("Location: admin.php");
  exit;
}

// Set username dan password yang diharapkan
$expected_username = "antok";
$expected_password = "123";

// Cek apakah formulir login sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan verifikasi login
    if ($username === $expected_username && $password === $expected_password) {
        // Login berhasil, set session
        $_SESSION["username"] = $username;
        
        // Set cookie jika login berhasil
        setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

        // Redirect ke halaman index.php setelah login sukses
        // header("Location: index.php");
        header("Location: admin.php");
        exit; // Pastikan untuk menghentikan eksekusi script setelah melakukan redirect
    } else {
        // Jika login gagal, bisa tampilkan pesan error atau melakukan tindakan lainnya
        $login_error = "Username atau password salah. Silakan coba lagi.";
    }


  }
  
  
// Variabel PHP untuk menyimpan nilai username yang mungkin diisi oleh pengguna
$display_username = isset($_POST['username']) ? $_POST['username'] : '';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/login.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <form action="" method="post">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="Username" id="usern" name="username" autocomplete="off"/>
          <i class="bx bx-user-circle"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" id="passw" name="password" autocomplete="off"/>
          <i class="bx bx-lock-alt"></i>
        </div>

        <div class="remember-forget">
          <!-- Menggunakan atribut for yang sesuai dengan id elemen input -->
          <label for="rememberMe">
            <input type="checkbox" id="rememberMe" />
            Ingat saya
          </label>
          <a href="#" id="forgotPasswordLink">Forgot password?</a>
        </div>
        
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
          <p>Don't have an account? <a href="register.html">Register</a></p>
        </div>
      </form>
    </div>

    <script>
        var forgotPasswordLink = document.getElementById("forgotPasswordLink");
        forgotPasswordLink.addEventListener("click", function(event) {
        event.preventDefault(); 
        var email = prompt("Silakan masukkan alamat email Anda untuk mereset password :");

        if (email) {
          alert("Sebuah email telah dikirim ke " + email + " dengan petunjuk untuk mereset password Anda.");
        } else {
          alert("Silakan masukkan alamat email Anda.");
        }
      });
</script>

<script>
  document.getElementById('usern').addEventListener('s ubmit', function(event) {
    event.preventDefault(); // Menghentikan form dari pengiriman
  
    // Mengambil nilai dari inputan
    var username = document.getElementById('usern').value;
    var password = document.getElementById('passw').value;
  
    // Menyimpan nilai ke Local Storage
    localStorage.setItem('username', username);
    localStorage.setItem('password', password);
  
    alert('Data login berhasil disimpan.');
  });
  </script>

  </body>
</html>
