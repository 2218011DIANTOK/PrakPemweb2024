<?php
session_start();

if ($_SESSION["username"] == null) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin</title>
    <link rel="stylesheet" href="./style/admin.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li class="active">
          <a href="#">
            <i class="bx bxs-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Gagasan/gagasan.php">
            <i class="bx bxs-objects-vertical-bottom"></i>
            <span>Jonegoro Jengker</span>
          </a>
        </li>
        <li>
          <a href="Gagasan/input.html">
            <i class="bx bx-notepad"></i>
            <span>Input Data</span>
          </a>
        </li>
        <li>
          <a href="Petisi/petisi.html">
            <i class="bx bxs-message-dots"></i>
            <span>Petisi dan Kampanye</span>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)" onclick="logout()">
            <i class="bx bxs-log-out"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main-content">
      <div class="header-wrapper">
        <div class="header-title">
          <span><?php echo $_SESSION["username"]?></span>
          <span>Dashboard</span>
        </div>
        <div class="user-info">
          <div class="search">
            <i class="bx bx-search-alt"></i>
            <input type="text" placeholder="Search" />
          </div>
        </div>
      </div>
    </div>
    <script>
      function logout(){
      document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
       window.location.href = "login.php";
      }
    </script>
  </body>
</html>
