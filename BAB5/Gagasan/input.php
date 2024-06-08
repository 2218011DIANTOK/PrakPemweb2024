<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Data</title>
    <link rel="stylesheet" href="../style/admin.css" />
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
        <li>
          <a href="../admin.html">
            <i class="bx bxs-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="gagasan.php">
            <i class="bx bxs-objects-vertical-bottom"></i>
            <span>Jonegoro Jengker</span>
          </a>
        </li>
        <li class="active">
          <a href="input.html">
            <i class="bx bx-notepad"></i>
            <span>Input Data</span>
          </a>
        </li>
        <li>
          <a href="Petisi/petisi.php">
            <i class="bx bxs-message-dots"></i>
            <span>Petisi dan Kampanye</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-log-out"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main-content">
      <div class="header-wrapper">
        <div class="header-title">
          <span>Input data</span>
          <span>Dashboard</span>
        </div>
        <div class="user-info">
          <div class="search">
            <i class="bx bx-search-alt"></i>
            <input type="text" placeholder="Search" />
          </div>
                 </div>
      </div>
      <div class="tabel-wrapper">
        <h3 class="main-title">Input data</h3>
        <div class="form-wrapper">
          <form>
            <div class="form-group">
              <label for="id_pengaduan">ID data</label>
              <input type="text" id="id_pengaduan" name="id_pengaduan" />
            </div>
            <div class="form-group">
                <label for="deskripsi">Judul Gagasan</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"></textarea>
              </div>
            <div class="form-group">
              <label for="deskripsi">Narasi Gagasan</label>
              <textarea id="deskripsi" name="deskripsi" rows="4"></textarea>
            </div>
            <div class="container">
                <form action="#">
                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" id="tanggal" name="tanggal">
                    </div>
                </form>
            </div>
            <div class="button-container">
              <button class="move-button">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
