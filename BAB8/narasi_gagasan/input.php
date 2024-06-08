<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Data</title>
    <link rel="stylesheet" href="../style/admin.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li><a href="../admin.php"><i class="bx bxs-dashboard"></i><span>Dashboard</span></a></li>
            <li><a href="gagasan.php"><i class="bx bxs-objects-vertical-bottom"></i><span>Jonegoro Jengker</span></a></li>
            <li class="active"><a href="input.php"><i class="bx bx-notepad"></i><span>Input Data</span></a></li>
            <li><a href="Petisi/petisi.php"><i class="bx bxs-message-dots"></i><span>Petisi</span></a></li>
            <li><a href="login.php"><i class="bx bxs-log-out"></i><span>Logout</span></a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <span>Input Data</span>
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
            <h3 class="main-title">Input Data</h3>
            <div class="form-wrapper">
                <form action="input.php" method="POST">
                    <div class="form-group">
                        <label for="judul_gagasan">Judul Gagasan</label>
                        <input type="text" id="judul_gagasan" name="judul_gagasan" />
                    </div>
                    <div class="form-group">
                        <label for="narasi_gagasan">Narasi Gagasan</label>
                        <textarea id="narasi_gagasan" name="narasi_gagasan" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="button-container">
                        <button class="move-button" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jonegoro_jengker";

// Membuat Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $id_gagasan = htmlspecialchars($_POST['id_gagasan']);
    $judul_gagasan = htmlspecialchars($_POST['judul_gagasan']);
    $narasi_gagasan = htmlspecialchars($_POST['narasi_gagasan']);

    // Insert data into database
    // Insert data into database
    $sql = "INSERT INTO gagasan ( judul_gagasan , narasi_gagasan) VALUES ('$judul_gagasan','$narasi_gagasan')";
    if ($conn->query($sql) === TRUE) {
        header("Location: gagasan.php"); // Redirect to keluhan.php after successfully saving data
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
