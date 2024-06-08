<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "jonegoro_jengker";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID pengaduan dari URL
$id_gagasan = $_GET['id'];

// Periksa apakah ID telah diterima dari URL
if (!isset($id_gagasan)) {
    // Jika tidak, redirect kembali ke halaman .php
    header("Location: gagasan.php");
    exit;
}

// Ambil data pengaduan dari database berdasarkan ID
$sql = "SELECT * FROM gagasan WHERE id_gagasan = '$id_gagasan'"; // Perhatikan penggunaan tanda kutip
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Data ditemukan, ambil baris data
    $row = $result->fetch_assoc();
} else {
    // Data tidak ditemukan, redirect kembali ke halaman .php
    header("Location: gagasan.php");
    exit;
}

// Persiapkan variabel $stmt
$stmt = null;

// Proses form jika POST request diterima
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $judul_gagasan = $_POST['judul_gagasan'];
    $narasi_gagasan = $_POST['narasi_gagasan'];

    // // Periksa apakah file telah diunggah
    if (isset($_FILES["foto_dokumen"]) && !empty($_FILES["foto_dokumen"]["name"])) {
        // Proses upload file
        $target_dir = "../foto/"; // Direktori penyimpanan file
        $target_file = $target_dir . basename($_FILES["foto_dokumen"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check apakah file sudah ada
        if (file_exists($target_file)) {
            echo "File sudah ada.";
            $uploadOk = 0;
        }

        // Check ukuran file
        if ($_FILES["foto_dokumen"]["size"] > 500000) {
            echo "Maaf, file terlalu besar.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (!in_array($imageFileType, array("jpg", "jpeg", "png", "gif"))) {
            echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
            $uploadOk = 0;
        }

        // Coba upload file jika tidak ada masalah
        if ($uploadOk == 1 && move_uploaded_file($_FILES["foto_dokumen"]["tmp_name"], $target_file)) {
            // Update data di database dengan path file yang baru
            $foto_dokumen = $target_file;
            $sql_update = "UPDATE gagasan SET judul_gagasan=?, narasi_gagasan=?, foto_dokumen=? WHERE id_gagasan=?";
            $stmt = $conn->prepare($sql_update);
            $stmt->bind_param("sssi", $judul_gagasan, $narasi_gagasan, $foto_dokumen, $id_gagasan);
        } else {
            echo "Maaf, terjadi error saat mengupload file.";
        }
    } else {
        // Update data di database tanpa mengubah foto
        $sql_update = "UPDATE gagasan SET judul_gagasan=?, narasi_gagasan=? WHERE id_gagasan=?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("ssi", $judul_gagasan, $narasi_gagasan, $id_gagasan);
    }

    // Eksekusi statement jika sudah didefinisikan
    if ($stmt !== null && $stmt->execute()) {
        // Jika update berhasil, redirect kembali ke halaman .php
        header("Location: gagasan.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Tutup statement jika sudah didefinisikan
    if ($stmt !== null) {
        $stmt->close();
    }
}

// Tutup koneksi database
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <!-- Head content -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../style/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li><a href="../admin.php"><i class="bx bxs-dashboard"></i><span>Dashboard</span></a></li>
            <li><a href="gagasan.php"><i class="bx bxs-objects-vertical-bottom"></i><span>Jonegoro Jengker</span></a></li>
            <li class="active"><a href="input.php"><i class="bx bx-notepad"></i><span>Input Data</span></a></li>
            <li><a href="../Petisi/petisi.php"><i class="bx bxs-message-dots"></i><span>Petisi</span></a></li>
            <li><a href="#"><i class="bx bxs-log-out"></i><span>Logout</span></a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <span>Edit Data</span>
                <span>Dashboard</span>
            </div>
            <div class="user-info">
                <div class="search">
                    <i class="bx bx-search-alt"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="../image/government64px.png" alt="">
            </div>
        </div>
        <div class="tabel-wrapper">
            <h3 class="main-title">Edit Data</h3>
            <div class="form-wrapper">
                <!-- Form untuk pengeditan data -->
    <form action="" method="
    post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul_gagasan">Judul Gagasan</label>
            <input type="text" id="judul_gagasan" name="judul_gagasan" value="<?php echo $row["judul_gagasan"]; ?>">
        </div>
        <div class="form-group">
            <label for="narasi_gagasan">Narasi Gagasan</label>
            <textarea id="narasi_gagasan" name="narasi_gagasan" rows="4"><?php echo $row["narasi_gagasan"]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="foto_dokumen">Foto Dokumen</label>
            <input type="file" id="foto_dokumen" name="foto_dokumen">
        </div>

        <button type="submit" class="edit-button">Simpan Perubahan</button>
    </form>
            </div>
        </div>
    </div>
</body>
</html>
