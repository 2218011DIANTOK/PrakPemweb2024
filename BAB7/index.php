<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTAL RESMI - PEMKAB BOJONEGORO</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="index.html" class="logo">
                    <img src="image/Logo-Kabupaten-Bojonegoro.png" alt="Kabupaten Bojonegoro Logo">
                </a>
                <div class="menu-toggle" id="menu-toggle">
                    <i class="bx bx-menu"></i>
                </div>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Berita</a></li>
                    <li class="dropdown">
                        <a href="#">Profil <i class="bx bx-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#">Tentang Kabupaten</a></li>
                            <li><a href="#">Pemerintah Kabupaten</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Informasi <i class="bx bx-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#">17 Program Prioritas</a></li>
                            <li><a href="#">DPPID</a></li>
                            <li><a href="#">Perijinan</a></li>
                            <li><a href="#">Pariwisata</a></li>
                            <li><a href="#">Potensi Bisnis</a></li>
                            <li><a href="#">Pengaduan/Keluhan Masyarakat</a></li>
                            <li><a href="#">RPJMD</a></li>
                            <li><a href="#">RPJPD</a></li>
                            <li><a href="#">LKPJ</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Regulasi</a></li>
                    <li><a href="#">Media Canter</a></li>
                    <li><a href="#">Web GIS City</a></li>
                    <li><a href="#">ID/EN</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </nav>
        </div>
        <div class="text-box">
            <h1>SELAMAT DATANG DI SITUS RESMI</h1>
            <h1>PEMKAB BOJONEGORO</h1>
            <p>
                Kami menyediakan platform bagi warga untuk mengekspresikan pendapat
                mereka <br>dan kekhawatiran mengenai permasalahan pemerintah daerah.
            </p>
            <a href="#" class="hero-btn">Untuk Informasi Lebih Lanjut</a>
        </div>
    </header>

    <div class="carousel">
        <div class="carousel-container">
          <div class="carousel-item"><img src="image/8A4KN3vRbauMdIPM.jpg" alt="Image 1"></div>
          <div class="carousel-item"><img src="image/GD84M6UzhpxeSeOs.jpg" alt="Image 2"></div>
          <div class="carousel-item"><img src="image/xxmbWPBqL5l6HlxN.jpeg" alt="Image 3"></div>
        </div>
        <button class="carousel-button prev" onclick="prevSlide()">&#10094;</button>
        <button class="carousel-button next" onclick="nextSlide()">&#10095;</button>
      </div>
      <script src="javascript/skrip.js"></script>

    <section class="services" id="services">
        <div class="container">
            <h2>Our Services</h2>
            <p>
                Some of the services we offer include: Online petition submission,
                Government issue tracking, and Community engagement.
            </p>
            <div class="row">
                <div class="course-col">
                    <h3>Service 1</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                        laudantium libero nemo ducimus tempore? Nulla cumque facere quia
                        iure ipsum quibusdam aut excepturi, id illum modi, quas ipsam saepe
                        consectetur.
                    </p>
                </div>
                <div class="course-col">
                    <h3>Service 2</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                        laudantium libero nemo ducimus tempore? Nulla cumque facere quia
                        iure ipsum quibusdam aut excepturi, id illum modi, quas ipsam saepe
                        consectetur.
                    </p>
                </div>
                <div class="course-col">
                    <h3>Service 3</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                        laudantium libero nemo ducimus tempore? Nulla cumque facere quia
                        iure ipsum quibusdam aut excepturi, id illum modi, quas ipsam saepe
                        consectetur.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us" id="about-us">
        <div class="container">
            <h2>About Us</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eligendi
                tempora deserunt. Vel tempora expedita maiores laudantium accusamus
                iusto, eum minus sunt! Aut magnam nemo accusamus earum impedit delectus
                quisquam?
            </p>
            <a href="#" class="hero-btn">CONTACT US</a>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <h4>&copy; 2023 PEMKAP-BOJONEGORO</h4>
            <div class="icons">
                <i class="bx bxl-facebook"></i>
                <i class="bx bxl-instagram"></i>
                <i class="bx bxl-linkedin"></i>
            </div>
        </div>
    </footer>

</body>
</html>
